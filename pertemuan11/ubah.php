<?php
require('functions.php');

// ambil data dari URL id
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$dataid = query("SELECT * FROM mahasiswa WHERE id=$id")[0];  // ini maksudnya ketika sudah mengambil data array dari $rows, yg diambil langsung index[0]nya
// code diatas ditambah index [0] karena ketika kita buka tempat pensilnya, ada lagi tempat pensil
// sehingga kita perlu mengambil dulu tempat pensil tersebut untuk menerima semua pensil
// jadi gk perlu lagi di tiap pemanggilan arraynya ditambah index[0] gitu
// contoh jika tidak pakai index[0] di $dataid == <?= $mhs[0]["nama"];?.>
// contoh jika memakai index[0] di $dataid == <?= $mhs["nama"];?.>

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
    // cek apakah data sudah berhasil diubah
    if(ubah($_POST)>0){ //variabel $_POST nantinya akan mengambil data dari user lalu dikirimkan ke variabel data yg ada di function.php
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href= 'index.php';
            </script>
        "; // jika row nya +1
    }else{
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href='index.php';
            </script>
        "; // jika row nya -1
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?= $dataid["id"] ;?>">
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $dataid["nama"];?>">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $dataid["nrp"] ;?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $dataid["jurusan"] ;?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $dataid["email"] ;?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $dataid["gambar"] ;?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>