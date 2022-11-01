<?php

require_once __DIR__ . '/vendor/autoload.php';
require ('functions.php');
$mahasiswa = query("SELECT * FROM mahasiswa");
$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Print</title>
</head>
<body>
    <h1>Daftar Mahasiswa </h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>jurusan</th>
                <th>Email</th>
            </tr>';
            $i = 1;
        foreach ($mahasiswa as $row){
            $html .= '<tr>
                <td>'. $i++ .'</td>
                <td><img src="img/'. $row["gambar"] .'"</td>
                <td>'. $row["nrp"] .'</td>
                <td>'. $row["nama"] .'</td>
                <td>'. $row["email"] .'</td>
                <td>'. $row["jurusan"] .'</td>
            </tr>';
        }
$html .= '</table>
</body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>