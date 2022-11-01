<?php
// jalankan dulu sessionnya untuk memulai $_SESSION
session_start();
include('functions.php');

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id nya
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }

    // if($_COOKIE["login"]=='true'){ // jika true, maka setcookie akan berjalan sesuai dengan perintah yg dibuat tadi
    //     $_SESSION['login']=true; // jika true, maka code yg dibawah akan dijalankan, selama cookie nya masih ada/belum expire
    // }
}
// jika sudah login, maka biarkan user di halaman index
if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["login"])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    // hasil dari database tabel users fieldnya username
    $result = mysqli_query($conn, "SELECT * FROM users where username='$username'");

    // cek username
    if(mysqli_num_rows($result) === 1){ // untuk ngitung ada brp baris yg dikembalikan dari fungsi Select diatas, jadi kalo ada nilainya/usernamenya pasti 1, kalo gk ada berarti 0
        // cek passwordnya
        $row = mysqli_fetch_assoc($result); // menyimpan data user yg login
        // untuk mengecek sebuah password, apakah string dari ini sama dengan password_hash yg ada, jika ada dan sama, berarti passwordnya bener
        // jika passwordnya bener, arahkan ke halaman index.php 
        if(password_verify($password, $row["password"])){
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if(isset($_POST["remember"])){
                // buat cookie
                
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
                // fungsi hash bisa menggunakan algoritma yg bermacam macam, bisa cek di php.net tentang hash
                // fungsi hash ini punya 2 parameter, yg pertama algoritmanya, yg kedua stringnya/valuenya
                //  code diatas ngambil data string dari database username ketika user login, jadi usernamenya di
                // acak gitu jadi karakter yg gk berurutan
            }
            
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
                <label for="remember">Remember me: </label>
                <input type="checkbox" name="remember" id="remember">
            </li>
            <li>
                <button type="submit" name="login">Login!</button>
            </li>
        </ul>
    </form>

    <a href="registrasi.php">Sign Up</a>
</body>
</html>