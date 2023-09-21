<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "latihanapi";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if(!$koneksi){
    die("Koneksi Gagal");
}

// echo "Berhasil"



?>