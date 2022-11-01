<?php

// array
//  variabel yang dapat memiliki banyak nilai
// pasangan antara key dan value (key and value pair)
// key-nya adalah index, yang dimulai dari [0]


// 2 cara membuat array, car alam dan cara baru
// nilai dalam sebuah array disebut elemen
// cara lama
$hari = array("Senin", "Selasa", "Rabu"); //sennin sleasa rabu itu elemen

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false]; //elemen pada array boleh memiliki tipe data yang berbeda

// menampilkan array
// bisa pake var_dump() / print_r()
// var_dump($hari);

// echo "<br>";

// print_r ($bulan);
// array(3) berarti tipenya array yg memiliki 3 buah elemen
// [0] merupakan urutan data array (index)
// => string (5) merupakan jumlah karakter dalam array

echo "<br>";
// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[]="Kamis"; //menambahkan array baru
$hari[]="Jum'at"; //menambahkan array baru
// ketika dipanggil kembali, maka jumlah arraynya akan bertambah
echo "<br>";
var_dump($hari);





?>