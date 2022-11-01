<?php
require('functions.php');
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){

    // var_dump($_POST); die; // -> die ini berfungsi untuk menghentikan baris code yg ada di bawahnya
    // cek apakah data sudah berhasil dikirim/ditambahkan
    if(tambah($_POST)>0){ //variabel $_POST nantinya akan mengambil data dari user lalu dikirimkan ke variabel data yg ada di function.php
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href= 'index.php';
            </script>
        "; // jika row nya +1
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan');
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
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>