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
            url(..//img/bg.jpg);
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
            background-image: url(../img/bgheader.png);
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
            text-align: center;
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

        .download a {
            color: white;
            text-decoration: none;
        }
        .download a:hover {
            color: lightblue;
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
            <h1>--- Mengwibu bersamaku ---</h1>
            <nav>
                <h3>Navigasi Kosong</h3>
            </nav>
        </div>

        <?php

        $anime = [
            [
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
            ]
        ]

        ?>
        <div class="mainevent">
            <div class="kanan">
                <?php foreach ($anime as $anim) : ?>
                <img src="../img/<?php echo $anim["gambar"]; ?>" alt="">
                <h2><?= $anim["nama"]; ?></h2>
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
                <?php endforeach; ?>
               <p class="teks">Fate UBW atau Route Rin Tosaka bercerita tentang kota Fuyuki adalah kota yang dikelilingi oleh laut dan pegunungan menjadi kota untuk ritual kuno. Untuk mewujudkan mitos Cawan Suci, yang dikatakan bisa memberikan setiap keinginan dair pemiliknya. Tujuh Master memberikan tujuh roh heroik yang dipilih oleh Cawan. Roh-roh heroik atau Servants tersebut antara lain adalah: Saber, Lancer, Archer, Rider, Caster, Assasin dan Berseker. Setiap master akan membuat kontrak dengan Servant mereka dan bertarung dengan Master dan Servant lainnya sampai mati dan hanya tersisa satu pasangan yang disebut Perang Cawan Suci.</p>
               <div class="download">
                   <table>
                       <tr>
                           <th colspan="2" style="width:10%;">Download Fate/Stay Night: Unlimited Blade WorksBD Subtitle Indonesia</th>
                       </tr>
                       <tr>
                           <td style="width:10%;text-align:center;"><span>360p</span></td>
                           <td><a href="" target="_blank">Google Drive</a></td>
                       </tr>
                       <tr>
                           <td style="width:10%;text-align:center;"><span>480p</span></td>
                           <td><a href="" target="_blank">Google Drive</a></td>
                       </tr>
                       <tr>
                           <td style="width:10%;text-align:center;"><span>720p</span></td>
                           <td><a href="" target="_blank">Google Drive</a></td>
                       </tr>
                    </table>
               </div>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero tempore consequuntur molestias, blanditiis, quia in aliquid expedita voluptatibus, fuga officiis illum ipsum consectetur soluta sit dolorem itaque saepe quibusdam doloremque?</p>
                <div class="clear"></div>
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