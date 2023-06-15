<?php

include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, " DELETE FROM pakaian WHERE id = $id");
header("location:read.php");
?>