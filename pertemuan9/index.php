<?php

require("functions.php");  // require dan include sama saja, tapi ada perbandingannya sedikit
$mahasiswa = query("SELECT * FROM mahasiswa");  // ini sudah menjadi array associative, maka untuk memanggilnya kita menggunakan perulangan foreach
// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() -> arraynya berbentuk numerik / nomor "contoh var_dump($mhs[1])" -> ini akan mengambil data ddengan key index [0],[1],...
// mysqli_fetch_assoc() -> arraynya berbentuk associative / string dari nama fieldnya "contoh var_dump($mhs["nama"])" ini akan mengambil data dengan string key "nama"
// mysqli_fetch_array() -> arraynya berbentuk numerik dan assoc, tapi nanti nilainya double, ini akan memakan memori yg cukup besar
// mysqli_fetch_object() -> arraynya berbentuk object "contoh var_dump($mhs->nama)"

// menampilkan semua data dari database table mahasiswa dengan perulangan while/jika hanya ingin menampilkan data nama, bisa menggunakan $mhs["nama_key"]
// while($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs["nama"]);
// }


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
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
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