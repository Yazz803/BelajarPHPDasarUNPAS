<?php

require('functions.php');

$id = $_GET["id"];  // id ini yg akan mengambil data dari "id" database, nanti datanya diambil dan akan 
                    //  ditambahkan ke url sesuai dengan data id yg ada di database.

if (hapus($id)>0){
    echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='index.php';
        </script>
    ";
}else {
    echo "
        <script>
            alert('data tidak berhasil dihapus');
            document.location.href='index.php';
        </script>
    ";
}

?>