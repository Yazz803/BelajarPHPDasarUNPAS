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
            background-color: gray;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 3px;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{clear: both;}
    </style>
    <title>Document</title>
</head>
<body>
    
<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
// echo $angka[2][2]; 
// ketika membuka tempat pensil ($angka) maka didalamnya ada tempat pensil lagi [1,2,3],[4,5,6],[7,8,9] ini untuk index pertama
// untuk index kedua, adalah angka yg ada di dalam index yg pertama, misal index pertama [1] maka jika ingin 
// mengambil angka 6, buat lagi index kedua [2], karena 6 ada di urutan kedua(index dimulai dari 0)
?>

<!-- membuat foreach didalam foreach untuk mengambil tempat pensil didalam tempat pensil -->
<?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
        <div class="kotak"><?= $b ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>