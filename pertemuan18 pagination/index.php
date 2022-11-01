w<?php
session_start();
// jika tidak ada session loogin, maka kembalikan user ke halaman login
if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require("functions.php");  // require dan include sama saja, tapi ada perbandingannya sedikit

// pagination
// konfigurasi
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM mahasiswa")); // count untuk menghitung ada berapa elemen di dalam array
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $jumlahData = mysqli_num_rows($result); // akan menghasilkan ada berapa baris yg dikembalikan dari query diatas, artinya ada berapa mahasiswa dalam table mahasiswa
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// fungsi round = mmebulatkan bilangan pecahan ke desimal terdekatnya
// fungsi floor = membulatkan bilangan pecahan ke bawah, jadi misal 1/6, ini hasilkan akan 1, karena dibulatkan kebawah
// fungsi ceil = membulatkan bilangan pecahan ke atas, jadi misal 1/2, ini hasilkan akan 2, karena dibulatkan keatas
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1; // pake operator ternary
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");  // ini sudah menjadi array associative, maka untuk memanggilnya kita menggunakan perulangan foreach
// sql LIMIT 1, 2 artinya membatasi jumlah data dalam mahasiswa yg dimulai dari index ke satu dan menampilkan 2 data

// perlu diingat bahwa yg mengendalikan ini adalah fungsi query, jadi ketika querynya diubah, maka tampilannya juga diubah
// untuk menampilkan data yg paling terbaru, data yg masuk ke databasenya, itu bisa memakai cara ini
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC/DESC") -> ORDER BY -> mulai dari mana urutan id nya(karena pakai id jadi ini dibacanya gitu)
// ASC = ASCENDING -> urutannya mulai dari yg terkecil hingga terbesar, karena kita pakai id, maka id yg paling kecil itu yg paling lama masuk ke databasenya, jadi nanti yg ditampilkannya itu yg terkecil dulu idnya, baru berurutan ke yg terbesar
// DESC = DESCENDING -> urutannya mulai dari yg terbesar hingga yg terkecil, penjelasannya sama seperti yg diatas, tapi dibalik aja

// jika user klik tombol cari, maka data mahasiswa ($mahasiswa) akan diganti/timpa jika user klik tombol cari
// tombol cari diklik
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

// var_dump($mahasiswa);
foreach($mahasiswa as $maha){
    var_dump($maha);
}
exit;
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
    
    <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa</h1>
    <br>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="masukan keyword pencarian" size="40" autocomplete="0ff"> 
        <!-- atribut autocomplete digunakan untuk mau ditampilkan history dari yg sudah diinput atau tidak, jika iya, ubah off jadi on, atau bisa dihapus atributnya -->
        <button type="submit" name="cari">Cari</button>
    </form>
<br><br>
    <!-- pagination navigasi -->

    <?php if($halamanAktif > 1) :?>
    <a href="?halaman=<?= $halamanAktif - 1;?>">&laquo</a>
    <?php endif;?>

    <?php for($i=1;$i<=$jumlahHalaman;$i++) : ?>
        <?php if ($i == $halamanAktif) :?>
            <a href="?halaman=<?= $i ;?>" style="font-weight: bold;color:red;"><?= $i ;?></a>
        <?php else :?>
            <a href="?halaman=<?= $i ;?>"><?= $i ;?></a>
        <?php endif;?>
    <?php endfor;?>

    <?php if($halamanAktif < $jumlahHalaman) :?>
    <a href="?halaman=<?= $halamanAktif + 1;?>">&raquo</a>
    <?php endif;?>
<br>
    <br>
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