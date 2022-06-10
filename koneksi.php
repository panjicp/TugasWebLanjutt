<?php

$url = "localhost";
$username = "root";
$password = "";
$database = "rental_ps";

$conn = mysqli_connect($url, $username, $password, $database);

// Tampilkan Data
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function tambah($data) {
//     global $conn;

//     $nama = htmlspecialchars($data["nama"]);
//     $email = htmlspecialchars($data["email"]);
//     $alamat = htmlspecialchars($data["alamat"]);

//     $sql = "INSERT INTO mahasiswa VALUES ('','$nama','$email','$alamat')";
//     mysqli_query($conn, $sql);

//     return mysqli_affected_rows($conn);
// }

// function ubah($data) {
//     global $conn;

//     $no = $data["no"];
//     $nama = htmlspecialchars($data["nama"]);
//     $email = htmlspecialchars($data["email"]);
//     $alamat = htmlspecialchars($data["alamat"]);

//     $sql = "UPDATE mahasiswa SET nama = '$nama', email = '$email', alamat = '$alamat' WHERE no = $no";
//     mysqli_query($conn, $sql);

//     return mysqli_affected_rows($conn);
// }

// function hapus($no) {
//     global $conn;
//     $sql = "DELETE FROM mahasiswa WHERE no = $no";
//     mysqli_query($conn, $sql);
//     return mysqli_affected_rows($conn);
// }

// function cari($search) {
//     $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$search%'";

//     return query($sql);
// }
