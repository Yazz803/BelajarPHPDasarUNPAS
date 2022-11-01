<?php
// mengkoneksikan php dengan database
$conn = mysqli_connect("localhost", "root", "", "anime");

// mengambil query/data dari database
function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $gambar = $data["gambar"];
    $nama = $data["nama"];
    $genre = $data["genre"];
    $produser = $data["produser"];
    $tipe = $data["tipe"];
    $status = $data["status"];
    $totaleps = $data["totaleps"];
    $score = $data["score"];
    $durasi = $data["durasi"];
    $rilis = $data["rilis"];

    //upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO daftaranime VALUES ('','$gambar','$nama','$genre','$produser','$tipe','$status','$totaleps','$score','$durasi','$rilis')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function komentar($data){
    global $conn;

    $username = $data["username"];
    $komentar = $data["komentar"];

    $query = "INSERT INTO komentaruser VALUES ('', '$username', '$komentar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM daftaranime WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    $id = $data["id"];
    $gambar = $data["gambar"];
    $gambarLama = $data["gambarLama"];
    $nama = $data["nama"];
    $genre = $data["genre"];
    $produser = $data["produser"];
    $tipe = $data["tipe"];
    $status = $data["status"];
    $totaleps = $data["totaleps"];
    $score = $data["score"];
    $durasi = $data["durasi"];
    $rilis = $data["rilis"];

    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else {
        $gambar = upload();
    }

    $query = "UPDATE daftaranime SET 
                gambar = '$gambar',
                nama = '$nama',
                genre = '$genre',
                produser = '$produser',
                tipe = '$tipe',
                status = '$status',
                totaleps = '$totaleps',
                score = '$score',
                durasi = '$durasi',
                rilis = '$rilis'
                WHERE id=$id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']["name"];
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
     $ekstensiGambar = explode('.', $namaFile);
     $ekstensiGambar = strtolower(end($ekstensiGambar));
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
                 alert('Gambar harus berukuran kurang dari 2MB');
             </script>
         ";
         return false;
     }
 
     //lolos pengecekan gambar, gambar siap di upload
     // generate nama gambar baru
     $namaFileBaru = uniqid();
     $namaFileBaru .= '.';
     $namaFileBaru .= $ekstensiGambar;
 
     move_uploaded_file($tmpName, 'asset/img/'. $namaFileBaru);
 
     return $namaFileBaru;

}

function cari($keyword){
    $query = "SELECT * FROM daftaranime WHERE 
                nama LIKE '%$keyword%'
                ";

    return query($query);
}

?>