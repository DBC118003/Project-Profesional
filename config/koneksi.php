<?php
$server     = "localhost";
$username   = "root";
$password   ="";
$database   ="grafik_pada_website_umkm_pky";

$koneksi = mysqli_connect($server, $username, $password, $database);

if(mysqli_connect_errno()) {
    echo "koneksi database gagal !: ". mysqli_connect_error();
}
?>