<?php
$serverlokal    = "localhost";
$username       = "root";
$password       = "";
$database       = "oleholehtoraja";

$connect = mysqli_connect($serverlokal, $username, $password, $database);
if (!$connect){
    die("koneksi ke database gagal" . mysqli_connect_error());
}