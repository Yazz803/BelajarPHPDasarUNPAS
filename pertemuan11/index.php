<?php

require("functions.php");  // require dan include sama saja, tapi ada perbandingannya sedikit
$mahasiswa = query("SELECT * FROM mahasiswa");  // ini sudah menjadi array associative, maka untuk memanggilnya kita menggunakan perulangan foreach

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <br>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>jurusan</th>
            <th>Email</th>
        </tr>
        
        <?php $i=1 ;?>
        <!-- 
            ini untuk nomornya, sebenernya bisa memakai $mhs["id"] tapi jika data yg ada di table mahasiswa
            salah satunya terhapus, maka urutannya itu akan aneh, misalkan data siswa yg id nya 2 sudah terhapus
            jadi nanti yg tampil diwebnya, no. 1,3,4,5,6,...

            jika memakai ini, maka secara otomatis jika ada yg bertambah atau berkurang, dia akan mengikuti 
            sesuai urutan dari datanya, misal ada data 10, lalu kita tampilkan datanya, dan benar ada 10 data
            tapi jika kita hapus salah satu datanya, misal data ke 9, maka ini tidak akan tampil seperti contoh diatas
            tapi akan berurutan sesuai dengan data yg dimiliki saat ini.
            begitupun dengan bertambahnya data, jika datanya ada 9 lalu kita buat data baru, maka yg tampil
            sesuai dengan bertambahnya data (increment)
       -->
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?php echo $i ;?></td>
            <td>
                <a href="ubah.php?id=<?= $mhs["id"] ;?>">Ubah</a> |
                <a href="hapus.php?id=<?= $mhs["id"]; ;?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
            </td>
            <td><img src="img/<?php echo $mhs["gambar"]; ?>" width="80px" alt=""></td>
            <td><?php echo $mhs["nama"] ;?></td>
            <td><?php echo $mhs["nrp"] ;?></td>
            <td><?php echo $mhs["jurusan"] ;?></td>
            <td><?php echo $mhs["email"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach ;?>
    </table>
</body>
</html>