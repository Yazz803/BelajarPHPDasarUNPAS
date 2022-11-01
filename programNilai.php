<?php

// jika nilai lebih besar dari 85 dan sama dengan 100, akan mendapatkan nilai A
// jika nilai lebih besar dari 75 dan kurang dari 84, akan mendapatkan nilai B
// jika nilai lebih besar dari 60 dan kurang dari 74, akan mendapatkan nilai C
// jika nilai lebih kecil dari 59, akan mendapatkan nilai D

// if(isset($_POST["submit"])){
//     echo "Hasil : ". programNilai();
// }
function programNilai(){
    if($_POST["angka1"]<=100 && $_POST["angka1"]>=85){
        echo "Hasil peringkat : <b>A</b> ". $_POST["angka1"]. " (Nilai)";
    }elseif($_POST["angka1"]>=75 && $_POST["angka1"]<85){
        echo "Hasil peringkat : <b>B</b> ". $_POST["angka1"]. " (Nilai)";
    }elseif($_POST["angka1"]>=60 && $_POST["angka1"]<75){
        echo "Hasil peringkat : <b>C</b> ". $_POST["angka1"]. " (Nilai)";
    }elseif($_POST["angka1"]<60 && $_POST["angka1"]>=1){
        echo "Hasil peringkat : <b>D</b> ". $_POST["angka1"]. " (Nilai)";
    }else{
        echo "Masukan Nilai";
    }
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>menentukan nilai</h1>

    <form action="" method="post">
        <label for="angka1">Masukan nilai</label>
        <input type="text" name="angka1" id="angka1">
        <button type="submit" name="submit">Hitung!</button>
    </form>

    <p>
        <?php if(isset($_POST["submit"])){
            programNilai();
        } ;?>
    </p>

</body>
</html>