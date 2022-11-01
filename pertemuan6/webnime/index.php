<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body::before {
            content: '';
            background-image: linear-gradient(
                rgba(0, 0, 0, 0.514),
                rgba(0, 0, 0, 0.452)
            ),
            url(asset/img/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        body .utama {
            background-color: rgb(255, 255, 255);
            width: 70%;
            margin: auto;
            position: relative;
            top: 200px;
            box-shadow: 0 0 20px black;
        }
        .imgheader {
            background-image: url(asset/img/bgheader.png);
            background-size: cover;
            width: 70%;
            right: 15%;
            height: 200px;
            background-position-y: -80px;
            position: fixed;
            z-index: -1;
        }
        .header h1 {
            font-size: 25px;
            padding: 10px 0 10px 20px;
            text-align: left;
        }
        .header nav {
            text-align: right;
            color: white;
            padding: 10px 0;
            font-size: 15px;
            background-color: rgb(20, 20, 20);
            display: flex;
            justify-content: space-between;
        }
        .header nav h2 {
            margin-left: 20px;
        }
        .header nav input {
            padding: 5px 10px;
            background-color: white;
            border: 0;
            border-radius: 2px;
            color: black;
        }
        .header nav button {
            margin-right: 20px;
            cursor: pointer;
            background-color: rgb(50, 50, 50);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            transition:.3s;
            border: 2px solid white;
        }
        .header nav button:hover{
            background-color: red;
            color: white;
            font-weight: bold;
        }
         /* main event */
         .mainevent {
             border-bottom: 1px solid black;
         }

        .mainevent .kanan {
            float: left;
            width: 70%;
            border-right: 1px solid black;

        }
        .mainevent .kiri {
            width: 27%;
            margin-left: 10px;
            float: left;
        }
        .clear { clear: both;}

        .kanan img {
            width: 100%;
            filter: brightness(70%);
            margin: 0;
        }
        .kanan p.teks {
            text-align: justify;
            padding: 10px;
        }
        .kanan hr {
            margin: 10px 0;
        }
        .kanan h2 {
            background-color: rgb(20, 20, 20);
            color: white;
            font-weight: bold;
            padding: 10px;
            margin: 0;
        }
        .kanan h2 a {
            text-decoration: none;
            color : lightblue;
            font-size: 15px;
        }
        .kanan h2 a:first-child:hover{
            color : blue;
        }
        .kanan h2 a:last-child:hover{
            color : red;
        }
        .kanan table {
            width: 100%;
        }
        .kanan table tr td {
            background-color: rgb(65, 65, 65);
            color: white;
            border-radius: 2px;
            font-size: 14px;
            padding: 8px 5px;
            margin-bottom: 8px;
        }

        .kiri h3 {
            background-color: rgb(20, 20, 20);
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 8px;
            color: white;
            font-size: 17px;
        }
        .kiri li {
            font-weight: bold;
        }

        /* kolom kanna dan kiri */
        .kolomkanan {
            width: 48%;
            margin-right: 2%;
            float: left;
        }
        .kolomkanan p, .kolomkiri p {
            background-color: rgb(255, 223, 223);
            font-size: 14px;
            padding: 8px 5px;
            margin-bottom: 8px;
        }
        .kolomkiri {
            width: 49%;
            float: left;
        }

        .komen h2 {
            background-color:rgb(20, 20, 20);
            color: white;
            padding: 5px 10px; 
        }
        footer {
            background-color: black;
            position: relative;
            top: 200px;
            padding: 20px;
            color: white;
        }

    </style>
    <title>Fate/Stay Night: Unlimited Blade Works</title>
</head>
<body>
    <div class="imgheader"></div>
    <div class="utama">
        <div class="header">
            <h1>List Anime Fate Series</h1>
            <nav>
                <h2>PHP GG Gemink</h2>
                <form action="" method="post">
                    <input type="text" name="keyword" autocomplete="off" placeholder="masukan judul Anime">
                    <button type="submit" name="cari">Search</button>
                </form>
            </nav>
        </div>

        <?php
        // ambil data dari database anime
        require ('functions.php');
        $anime = query("SELECT * FROM daftaranime"); // daftaranime adalah nama table yg ada di database anime
        $komentaruser = query("SELECT * FROM komentaruser");

        // apakah user tekan tombol submit untuk berkomentar
        if(isset($_POST["komen"])){
            if(komentar($_POST)){
                echo "
                    <script>
                        alert ('Terima kasih atas komentarnya!');
                        document.location.href='index.php';
                    </script>
                ";
            }else {
                echo "
                    <script>
                        alert('Komentar gagal terikirim');
                        document.location.href='index.php';
                    </script>
                ";
            }
        }

        // apakah tombol dengan nama  cari sudah ditekan, jika sudah jalankan perintah didalamnya
        if(isset($_POST["cari"])){
            $anime = cari($_POST["keyword"]);
        }

        // amdbil data dari table daftaranime
        // $anim = mysqli_fetch_assoc($result);

        ?>
        <div class="mainevent">
            <div class="kanan">
                <!-- melakukan pengambilan semua data menggunakan perulangan while -->
                <?php $i=1; ?>
                <?php foreach($anime as $anim) : ?>
                <img src="asset/img/<?php echo $anim["gambar"]; ?>" alt="">
                <h2><?= $i;?><?= $anim["nama"]; ?> | <a href="edit.php?id=<?= $anim["id"] ;?>">Edit</a> | <a href="hapus.php?id=<?= $anim["id"] ;?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a> |</h2>
                <p></p>
                <hr>
                <table border="0" cellpadding="0" cellspacing="10">
                    <tr>
                        <th style="width:50%"></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Genre : </b><?= $anim["genre"]; ?></p>
                        </td>
                        <td>
                            <p><b>Status : </b><?= $anim["status"]; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Type : </b><?= $anim["tipe"]; ?></p>
                        </td>
                        <td>
                            <p><b>Producers : </b><?= $anim["produser"]; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Total Episode : </b><?= $anim["totaleps"]; ?></p>
                        </td>
                        <td>
                            <p><b>Score : </b><?= $anim["score"]; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            <p><b>Durasi : </b><?= $anim["durasi"]; ?></p>
                        </td>
                        <td>
                            <p><b>Released : </b><?= $anim["rilis"]; ?></p>
                        </td>
                    </tr>
                </table>
                <?php $i++; ?>
                <?php endforeach ;?>
                <hr>
            </div>
            <div class="kiri">
                <h3>My Social Media</h3>
                <li>Admin Yazz</li>
                <li><a href="tambah.php">Tambah Daftar Anime</a></li>
            </div>
            <div class="clear"></div>    
        </div>
        <div class="komen">
            <h2>Komentar</h2>
            <div class="komen1">
                <form action="" method="post">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username">
                    <br><br>
                    <label for="komentar">Komentar: </label><br>
                    <textarea name="komentar" id="komentar" cols="30" rows="10"></textarea>
                    <br><br>
                    <button type="submit" name="komen">Kirim!</button>
                </form>
            </div>
        </div>

        <br><br>
        <div class="komentaruser">
            <h2>Isi Komentar mu</h2>
            <?php foreach($komentaruser as $komen) : ?>
                <br>
                <p><?= $komen["username"] ;?></p>
                <p><?= $komen["komentar"] ;?></p>
            <?php endforeach ;?>
        </div>
    </div>
    
    <footer>
        <h4>Yazz803</h4>
    </footer>

</body>
</html>