<?php
// variabel scope / lingkup variabel
// $x = 10; //variabel lokal di luar function

// function tampilX(){
//     global $x; //keyword global berfungsi untuk mencari variabel lokal yg ada di luar function(global)
//     echo $x; // jika tidak pakai keyword global, maka variabelnya harus dibuat lagi didalam function agar bisa dijalankan
// }

// tampilX();


// SUPERGLOBALS
// variabel milik php
// merupakan array associative
/* 
1. $_GET
2. $_POST
3. $_REQUEST
4. $_SESSION
5. $_COOKIE
6. $_SERVER
7. $_ENV => ENVIRONMENT
*/
$mahasiswa= [
    [
        "nama" => "Muhammad Yazid Akbar",
        "nis" => "12108627",
        "jurusan" => "PPLG",
        "email" => "yazid@gmail.com",
        "gambar"=> "pic121.jpeg"
    ],
    [
        "nama" => "Firdaus",
        "nis" => "12108217",
        "jurusan" => "PPLG",
        "email" => "firdaus@gmail.com",
        "gambar"=> "pic111.jpeg"
    ]
]
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
    <h1>Daftar Murid</h1>

    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
        <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&gambar=<?= $mhs["gambar"];?>&nis=<?= $mhs["nis"];?>&jurusan=<?= $mhs["jurusan"] ;?>&email=<?= $mhs["email"];?>"><?= $mhs["nama"]; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>