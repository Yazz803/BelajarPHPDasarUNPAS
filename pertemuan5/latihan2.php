<?php

// pengulangan pada array
// bisa pake for atau 'foreach'
$angka = [3,13,134,1432,41];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear:both;}
    </style>
    <title>Latihan 2</title>
</head>
<body>
    <!-- 
        ini akan mengulang div sebanyak array yg ada di variabel angka
        menggunakan kurung kurawal di php yg berbeda
     -->
    <?php for($i = 0; $i < count($angka); $i++){ ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php for($i=0; $i < count($angka); $i++){ ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- 
        $angka akan dirubah variabel menjadi var baru yaitu $a 
        untuk setiap "foreach"
        untuk memanggil arraynya bisa pake echo didalam tag div
    -->
    <?php foreach($angka as $a){ ?>
        <div class="kotak"><?= $a ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- 
        tidak pake kurung kurawal, tapi pake titik dua 
        jika pakai titik dua, di akhir phpnya harus pake 'endforeach'
    -->
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach;?>

</body>
</html>