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
            text-align: center;
            color: white;
            padding: 10px 0;
            font-size: 15px;
            background-color: rgb(20, 20, 20);
        }
        .formTambah h2 {
            text-align: center;
            padding: 20px;
        }

        table {
            width: 100%;
            padding-bottom: 70px;
        }
        table tr th {
            background-color: black;
            color: white;
        }
        table tr td button {
            width: 20%;
            height: 30px;
            font-weight: bold;
            margin-top: 20px;
            background-color: white;
            color: black;
            border-radius: 4px;
            transition: .3s;
        }
        table tr td button:hover{
            background-color: gray;
            color: white;
        }
        input {
            width: 100%;
            /* border: 0; */
            height: 80px;
            padding: 10px;
            font-weight: bold;
        }
        textarea {
            padding: 10px;
            font-weight: bold;
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
            <h1>Ubah Daftar Anime</h1>
            <nav>
                <h3>Navigasi Kosong</h3>
            </nav>
        </div>
        
        <div class="formTambah">
            <h2>Silahkan isi form dibawah ini</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <table border="1" cellspacing="0">
                    <tr>
                        <th>Gambar</th>
                        <th>Upload Gambar</th>
                        <th>Nama</th>
                        <th>Genre</th>
                        <th>Produser</th>
                        <th>Tipe</th>
                    </tr>
                    <tr>
                    <?php
                        require('functions.php');

                        if(isset($_POST["submit"])){
                            if(edit($_POST)){
                                echo "
                                    <script>
                                        alert ('Data Berhasil Diubah!');
                                        document.location.href='index.php';
                                    </script>
                                ";
                            }else {
                                echo "
                                    <script>
                                        alert('Data gagal Diubah');
                                        document.location.href='index.php';
                                    </script>
                                ";
                            }
                        }

                        $id = $_GET["id"];

                        $dataid = query("SELECT * FROM daftaranime WHERE id=$id")[0];
                    ?>
                        <input type="hidden" name="id" value="<?= $dataid["id"] ;?>">
                        <input type="hidden" name="gambarLama" value="<?= $dataid["gambar"] ;?>">
                        <td><img src="asset/img/<?= $dataid["gambar"] ;?>" width="100px" alt=""> </td>
                        <td><input type="file" name="gambar" id="gambar" value="<?= $dataid["gambar"] ;?>"></td>
                        <td><textarea name="nama" id="nama" cols="20" rows="5"><?= $dataid["nama"] ;?></textarea></td>
                        <td><textarea name="genre" id="genre" cols="20" rows="5"><?= $dataid["genre"] ;?></textarea></td>
                        <td><textarea name="produser" id="produser" cols="20" rows="5"><?= $dataid["produser"] ;?></textarea></td>
                        <td><input type="text" name="tipe" id="tipe" value="<?= $dataid["tipe"] ;?>"></td>
                    </tr>
                </table>
                <table border="0" cellspacing="0">
                <tr>
                    <th>Status</th>
                    <th>Totaleps</th>
                    <th>Score</th>
                    <th>Durasi</th>
                    <th>Rilis</th>
                </tr>
                <tr>
                    <td><input type="text" name="status" id="status" value="<?= $dataid["status"] ;?>"></td>
                    <td><input type="text" name="totaleps" id="totaleps" value="<?= $dataid["totaleps"] ;?>"></td>
                    <td><input type="text" name="score" id="score" value="<?= $dataid["score"] ;?>"></td>
                    <td><input type="text" name="durasi" id="durasi" value="<?= $dataid["durasi"] ;?>"></td>
                    <td><input type="text" name="rilis" id="rilis" value="<?= $dataid["rilis"] ;?>"></td>
                </tr>
                <tr>
                    <td colspan="5"><center><button type="submit" name="submit">Ubah Data!</button></center></td>
                </tr>
                </table>

            </form>
        </div>

        
        </div>
    </div>

    <footer>
        <h4>Yazz803</h4>
    </footer>

</body>
</html>