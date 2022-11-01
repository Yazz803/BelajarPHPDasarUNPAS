<?php
function salam($nama="Admin", $waktu="Datang"){
    // return mengembalikan nilai
    return "Selamat $waktu, $nama!";
}



// <?= itu sama dengan <?php echo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    
    <h1><?= salam("Yazid", "Pagi"); ?></h1>
</body>
</html>