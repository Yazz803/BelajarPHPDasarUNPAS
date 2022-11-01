<?php

// membuat cookie dengan key 'nama' dan value 'Yazid' lalu diberi waktu expire nya 1 menit menggunakan
// time()+60 => maksudnya time ini adalah waktu yg berjalan sekarang, lalu ditambah 60 detik
// yg artinya cookie ini akan berakhir/expire dalam waktu 1 menit, jika 1 menit belum abis lalu kita close
// web browsernya, lalu masuk lagi ke halaman2 nya, cookie ini tidak akan hilang, sampai waktu 1 menit
setcookie('nama', 'Yazid', time()+60);

?>