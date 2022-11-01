<?php
    /* 
        date untuk menampilkan tanggal dengan format tertentu
        parameter dalam function date ada -> l untuk nama harinya, d untuk tanggalnya, m untuk bulannya
        (m kecil untuk angka bulannya, M besar untuk nama bulannya), Y untuk tahun.
        untuk lebih lengkapnya ada di https://php.net/manual/en/funtion.date.php
     */
    echo date("l, d-M-Y");
    echo "<br>===================== <br>";
    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    echo time();
    echo "<br>===================== <br>";

    // menghitung atau menebak hari menggunakan 2 function date dan time
    echo date("d M Y", time()+60*60*24*360);
    // dibacanya, ini akan menampilkan tanggal seratus hari dari sekarang
    // 1 x 60 = 1menit, 1 x 60 = 1 jam, 1 jam x 24 jam = 1hari, jadi hitungnya pakai rumus diatas
    // jika ingin menghitung hari kemarin atau 100 hari yg lalu, operatornya ganti jadi (-)

    echo "<br>===================== <br>";

    // function mktime, membuat sendiri detik yang berlalunya, dari 1 januari 1970 ke detik yg diinginkan
    // mktime(0,0,0,0,0,0);
    // jam, menit, detik, bulan, tanggal, tahun
    // mktime(0,0,0,6,9,2005);
    // fungsi diatas menunjukan detik dari 1 jan 1970 ke 6 juni 2005
    // jika dikombinasikan dgn fungsi date, maka saya bisa menebak hari dari tgl tersebut
    echo date("l", mktime(0,0,0,6,9,2005));
    echo " : hari kamis adalah hari saya lahir";

    echo "<br>===================== <br>";
    // strtotime
    // kebalikan dari mktime, fungsi ini memakai string
    echo date("l", strtotime("9 june 2005"));

    /* 
        string
        strlen(); --> menghitung jumlah string
        strcmp(); --> membandingkan string
        explode(); --> memecah string menjadi array
        htmlspecialchars(); --> agar lebih secure websitenyas

        utility (fungsi bantuan)
        var_dump(); --> mencetak isi dari sebuah varibel, array, object, dll
        isset() --> ngecek apakah sebuah variabel udh pernah dibuat  atau belum, hasilnya nanti boolean (true or false)
        empty() --> apakah variabel yg ada itu kosong atau tidak, ada isinya atau tidak
        die() --> memberhentikan program, jika ada program yg ada dibawahnya, maka program itu tidak dijalankan
        sleep() --> untuk memberhentikan sementara, misal sleep(2) "2detik"
    */

    

?>