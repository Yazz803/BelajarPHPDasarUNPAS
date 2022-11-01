<?php

require('functions.php');

$id = $_GET["id"];

// redirect user/ mengembalikan user ketika sudah melakukan sesuatu
if(hapus($id)>0){
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href='index.php';
        </script>
    ";
}else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href='index.php';
        </script>
    ";
}

?>