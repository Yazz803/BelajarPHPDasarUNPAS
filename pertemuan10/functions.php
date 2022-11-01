<?php

// mengkoneksikan php dengan database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
 
// query untuk menampilkan/mengambil data dari database
function query($query){ // $query ini menampung nilai dari string "SELECT * FROM mahasiswa", jadi di var $result, tinggal tulis saja var $query
    global $conn;  //untuk mengambil variabel yg ada di luar function
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    // mengambil data dari post
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // memasukan data dari inputan user ke dalam database table mahasiswa
    $query = "INSERT INTO mahasiswa 
                VALUES 
                ('', '$nama', '$nrp', '$jurusan', '$email', '$gambar')
            ";

    // function untuk menambahkan data. function ini juga bisa digunakan untuk menghapus, mengedit, dll.
    // jadi hanya mengubah variabel $query didalamnya, dan di variabel tersebut, isi dengan perintah yg diinginkan(hapus, edit, dsb)
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn); // jika gagal minus -1(false) jika berhasil plus 1(true)
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa where id = $id"); // ini akan menghapus data dari table mahasiswa yg idnya sesuai dengan yg kita inginkan
    return mysqli_affected_rows($conn);
}
?>