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

    //upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }

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

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar di upload
    if($error === 4){ // 4 berarti tidak ada gambar yg diupload
        echo "
            <script>
                alert('Pilih Gambar terlebih dahulu');
            </script>
        ";
        return false;
    }

    // cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile); // fungsi explode berfungsi untuk memecah string menjadi beberapa array
    // delimiternya (yg '.' ini) bisa diubah sesuai dengan keinginan kita
    // contoh : stringnya Yazid.jpeg, nah nanti ini akan di ubah menjadi array ['Yazid', 'jpeg']
    // Yazid.jpeg = ['Yazid', 'jpeg']
    $ekstensiGambar = strtolower(end($ekstensiGambar)); 
    // jadi ini maksudnya, ketika sudah dipecah pakai explode, pilih array yg paling belakang
    // memakai fungsi end, dan ubah semua stringnya menjadi huruf kecil semua memakai strtolower
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){ // in_array berfungsi untuk mengecek apakah ada nilai(string, integer) yg ada di dalam array
        echo "
            <script>
                alert('Yang anda upload bukan gambar');
            </script>
        ";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if($ukuranFile > 2000000){
        echo "
            <script>
                alert('Gambar harus berukuran kurang dari 1MB');
            </script>
        ";
        return false;
    }

    //lolos pengecekan gambar, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa where id = $id"); // ini akan menghapus data dari table mahasiswa yg idnya sesuai dengan yg kita inginkan
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambarLama = $data["gambarLama"];
    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else {
        $gambar = upload();
    }
    $gambar = htmlspecialchars($data["gambar"]);

    // memasukan data dari inputan user ke dalam database table mahasiswa
    $query = "UPDATE mahasiswa SET 
                nama='$nama', 
                nrp ='$nrp', 
                jurusan='$jurusan', 
                email='$email', 
                gambar='$gambar' 
                WHERE id=$id";

    // function untuk menambahkan data. function ini juga bisa digunakan untuk menghapus, mengedit, dll.
    // jadi hanya mengubah variabel $query didalamnya, dan di variabel tersebut, isi dengan perintah yg diinginkan(hapus, edit, dsb)
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn); // jika gagal minus -1(false) jika berhasil plus 1(true)
    
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR 
                    nrp LIKE '%$keyword%' OR 
                    email LIKE '%$keyword%' OR 
                    jurusan LIKE '%$keyword%'";  
                    // ini akan mencari semua data dari nama, nrp, email, dan jurusan menggunakan 'OR'
    // jadi ini akan mencari data nama yg depan dan belakangnya itu apapun, misalkan mau nyari nama Muhammad Yazid Akbar, 
    // gk perlu ditulis secara lengkap dan sama persis jika memakai ini, hanya tulis yazid saja bisa ketemu hasilnya yg 
    // ada kata 'yazid' (harus memakai LIKE '%namaparameter%' -> baru bisa jalan/berhasil)

    return query($query);  // mengembalikan hasilnya berupa array assosiative dan masukan kedalam $mahasiswa 
}
?>