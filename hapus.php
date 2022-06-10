<?php
require 'koneksi.php';

$id = $_GET["id"];

$sql = "DELETE FROM pelanggan WHERE id_pelanggan = $id";
mysqli_query($conn, $sql);
header("Location:index.php");
return mysqli_affected_rows($conn);
