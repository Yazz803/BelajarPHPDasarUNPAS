<?php

// mengkoneksikan php dengan database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){ // $query ini menampung nilai dari string "SELECT * FROM mahasiswa", jadi di var $result, tinggal tulis saja var $query
    global $conn;  //untuk mengambil variabel yg ada di luar function
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

?>