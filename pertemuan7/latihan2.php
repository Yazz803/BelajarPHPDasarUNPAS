<?php
// cek apakah key nama, gambar, jurusan, dll sudah dibuat atau belum
// jika tidak, alihkan user kembali ke halaman latihan1.php
// ini disebut dengan redirect
if(
    // jika tidak ada data di salah satu key nama, nis, dll maka alihkan user kembali ke latihan1.php
    !isset($_GET["nama"]) ||
    !isset($_GET["nis"]) ||
    !isset($_GET["jurusan"])  ||
    !isset($_GET["gambar"]) ||
    !isset($_GET["email"])
    ){
    header("Location: latihan1.php");
    exit;
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
    <ul>
        <!-- 
            ini disebut variabel superglobals $_get, ini akan langsung mencetak isi dari variabel superglobals
            yang diambil dari request method $_get yg ada di latihan1.php
            mencetak gambar, nama, nis, jurusan, email
        -->
        <img style="width: 100px;" src="../pertemuan6/img/<?= $_GET["gambar"]; ?>" alt="">
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nis"]; ?></li>
        <li><?= $_GET["jurusan"];?></li>
        <li><?= $_GET["email"];?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar murid</a>
</body>
</html>