<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
mysqli_query($koneksi, "update tas set nama='$nama', harga='$harga' where id='$id'");
header("location:read.php");
?>