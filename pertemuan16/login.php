<?php
// jalankan dulu sessionnya untuk memulai $_SESSION
session_start();
// jika sudah login, maka biarkan user di halaman index
if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
include('functions.php');
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["login"])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    // hasil dari database tabel users fieldnya username
    $result = mysqli_query($conn, "SELECT * FROM users where username='$username'");

    // cek username
    if(mysqli_num_rows($result) === 1){ // untuk ngitung ada brp baris yg dikembalikan dari fungsi Select diatas, jadi kalo ada nilainya/usernamenya pasti 1, kalo gk ada berarti 0
        // cek passwordnya
        $row = mysqli_fetch_assoc($result);
        // untuk mengecek sebuah password, apakah string dari ini sama dengan password_hash yg ada, jika ada dan sama, berarti passwordnya bener
        // jika passwordnya bener, arahkan ke halaman index.php 
        if(password_verify($password, $row["password"])){
            // set session
            $_SESSION["login"] = true;
            
            header("Location: index.php");
            exit; // ini akan memberhentikan code yg ada dibawahnya, jadi programnya berhenti disini, tidak masuk ke error
        }
    }

    // error ini akan berjalan ketika code diatas ada kesalahan, jika ada kesalahan
    // tampilkan pesan error
    $error = true;


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <!-- jika ada error pada username dan passwordnya, ini akan ditampilkan -->
    <?php if(isset($error)) :?>
        <p>Username / Password Salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login!</button>
            </li>
        </ul>
    </form>

    <a href="registrasi.php">Sign Up</a>
</body>
</html>