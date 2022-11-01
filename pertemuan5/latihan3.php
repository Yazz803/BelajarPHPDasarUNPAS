<?php

// cara menampilkan array di dalam array
// namanya array multi dimensi, jadi array didalam array
// array yg dibuat ini adalah array numerik, jadi array yang indexnya angka (yg dimulai dari 0)
$mahasiswa = [
    ["Muhammad Yazid Akbar", "12108627", "Pengembangan Perangkat Lunak dan Gim", "muhammadyazidakbar@smkwikrama.sch.id"],
    ["Habibi", "1210201", "Rekayasa Perangkat Lunak", "habibi@smkwikrama.sch.id"],
    ["Febri", "1202190", "OTKP", "febrialamsyah@smkwikrama.sch.id"]
];

$perkalian = [
    [100*29, 80/8],
    [20+201*219]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <!-- test/iseng -->
    <?php foreach($perkalian as $kali) : ?>
        <p><?= $kali[0]; ?></p>
    <?php endforeach; ?>

    <h1>Daftar Mahasiswa</h1>
    <!-- melakukan pengulangan terhadap tag ul dan li -->
    <!-- $mhs meruapakan representasi dari tiap tiap array -->
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?php echo $mhs[0] ?></li>
        <li>NIS : <?php echo $mhs[1] ?></li>
        <li>Jurusan : <?php echo $mhs[2] ?></li>
        <li>Email : <?php echo $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>