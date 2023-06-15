<?php

include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, " DELETE FROM kaintenun WHERE id = $id");
header("location:read.php");
?>