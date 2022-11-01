<?php
// algoritmanya seperti ini

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
    // cek apakah username dan password sudah benar
    if($_POST["username"]=="yazid501" && $_POST["password"]=="sangatrahasia"){
        // jika sudah benar, redirect ke admin.php
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Silahkan Login</h1>

    <?php if(isset($error)) : ?>
        <p style="color:red;font-weight:italic;">Username/Password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>