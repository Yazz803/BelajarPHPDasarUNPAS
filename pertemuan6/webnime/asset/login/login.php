<?php
require ('functions.php');
// ketika submit ditekan, jika berhasil, arahkah user ke halaman websitenya
// $username = query("SELECT username FROM accountanime")[0]["username"];
// $password = query("SELECT password FROM accountanime")[0]["password"];
// var_dump($password);
// var_dump($username);
if(isset($_POST["submit"])){
    $username = query("SELECT username FROM accountanime")[0]["username"];
    $password = query("SELECT password FROM accountanime")[0]["password"];
    if($_POST["username"] == "$username" && $_POST["password"] == "$password"){
        echo "
            <script>
                alert('Login Berhasil!');
                document.location.href='../../index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('Login Gagal!');
            document.location.href='login.php';
        </script>
        ";
    }

    mysqli_affected_rows($conn);
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
    <h1>Login</h1>

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
                <button type="submit" name="submit">Login</button>
            </li>
        </ul>
    </form>

    <a href="register.php">Register</a>
</body>
</html>