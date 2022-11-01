<?php
// array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya bisa diatur sendiri menggunakan string
$murid = [
    [
        "gambar" => "pic121.jpeg",
        "nama" => "Muhammad Yazid Akbar",
        "nis" => "12108627",
        "jurusan" => "Pengembangan Perangkat Lunak dan Gim",
        "email" => "muhammadyazidakbar@smkwikrama.sch.id"
    ],
    [
        "gambar" => "pic111.jpeg",
        "nis" => "12102137",
        "nama" => "Muhammad Alwi",
        "jurusan" => "Teknik Komputer Jaringan dan Telekomunikasi",
        "email" => "muhammadalwi@smkwikrama.sch.id",
        "tugas" => [80,90,100]
    ]
] ;
// sekarang indexnya bukan lagi angka, tetapi menjadi string yg dibuat sendiri
// walaupun array-nya ketuker, itu tidak akan berpengaruh untuk tampilannya nanti, karena php sudah
// mengidentifikasi bahwa array yg key-nya "nama" maka php akan menampilkan array nama

// untuk memanggil satu buah array dalam array asosiatif ini
echo $murid[1]["tugas"][2]; // ini akan mencetak angka 100
// didalam array ada array lagi dan lagi
// maka urutan index untuk memanggilnya adalah 
/* 
1. perhatikan tempat pensilnya
2. didalam tempat pensil ada tempat pensil lagi, jika sudah ditentukan tulis indexnya(pertama)
3. ambil satu array yg sudah dibuat key-nya sendiri dan buat indexnya(kedua)
4. pilih array mana yg akan ditampilkan sesuai urutan dalam arraynya (ketiga)
*/

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
    <?php foreach ($murid as $m) : ?>
        <ul>
            <img src="img/<?= $m["gambar"];?>" alt="test" style="width: 150px;">
            <li>Nama : <?= $m["nama"];?> </li>
            <li>NIS : <?= $m["nis"]; ?></li>
            <li>Jurusan : <?= $m["jurusan"]; ?></li>
            <li>Email : <?= $m["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>