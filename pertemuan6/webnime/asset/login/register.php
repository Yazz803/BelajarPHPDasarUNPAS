<?php
require ('functions.php');
$query = query("SELECT * FROM accountanime");

// apakah submit sudah ditekan/belum
if(isset($_POST["submit"])){
    if(tambah($_POST)>0){
        echo "
            <script>
                alert('Data sudah berhasil terkirim! silahkan Login');
                document.location.href='login.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data gagal terkirim! silahkan coba lagi');
                document.location.href='register.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Kirim!</button>
            </li>
        </ul>
    </form>
</body>
</html>