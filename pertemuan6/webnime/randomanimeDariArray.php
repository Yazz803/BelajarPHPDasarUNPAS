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
         /* main event */

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
            <h1>Random Anime List</h1>
            <nav>
                <h3>Navigasi Kosong</h3>
            </nav>
        </div>

        <?php

        $anime = [
            [
                "id" => "1. ",
                "gambar" => "anime1.jpg",
                "nama" => "Fate/Stay night : Unlimited Blade Works",
                "genre" => "Action, Fantasi, Magic, Shounen, Supernatural",
                "produser" => "Aniplex, Notes",
                "tipe" => "BD",
                "status" => "Completed",
                "totaleps" => "Prolog + 25 + Sunny day",
                "score" => "8.40",
                "durasi" => "24 min/eps",
                "rilis" => "Oct 12 2014"
            ],
            [
                "id" => "2. ",
                "gambar" => "anime2.jpg",
                "nama" => "Fate/Stay Night",
                "genre" => "Action, Fantasy, Magic, Romance, Supernatural",
                "produser" => "Geneon Universal Entertainment, Frontier Works, TBS, KlockWorx, Notes",
                "tipe" => "BD",
                "status" => "Completed",
                "totaleps" => "24",
                "score" => "7.56",
                "durasi" => "24 min/eps",
                "rilis" => "Jan 07 2007"
            ]

        ]

        ?>
        <div class="mainevent">
            <div class="kanan">
                <?php foreach ($anime as $anim) : ?>
                <img src="asset/img/<?php echo $anim["gambar"]; ?>" alt="">
                <h2><?= $anim["id"];?><?= $anim["nama"]; ?></h2>
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
                <hr>
                <?php endforeach; ?>
            </div>
            <div class="kiri">
                <h3>My Social Media</h3>
                <li>Admin Yazz</li>
            </div>
            <div class="clear"></div>

            
        </div>
    </div>

    <footer>
        <h4>Yazz803</h4>
    </footer>

</body>
</html>