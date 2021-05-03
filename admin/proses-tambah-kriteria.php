<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_umkm         =$_POST['id_umkm'];
$kriteria_umkm     =$_POST['kriteria_umkm'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into kriteria(id_umkm, kriteria_umkm) VALUES 
('$id_umkm', '$kriteria_umkm')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah kriteria berhasil'); window.location='kriteria.php';</script>";
}else{
echo "<script> alert('Proses tambah kriteria gagal'); history.back();</script>";
}


?>