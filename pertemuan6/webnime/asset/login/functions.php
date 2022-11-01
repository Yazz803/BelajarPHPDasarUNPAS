<?php

$conn = mysqli_connect("localhost", "root", "", "listaccount");

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

    $username = $data["username"];
    $password = $data["password"];

    $kirimdata = "INSERT INTO accountanime VALUES (
                    '',
                    '$username',
                    '$password'
        )
        ";

    mysqli_query($conn, $kirimdata);

    return mysqli_affected_rows($conn);
}

?>