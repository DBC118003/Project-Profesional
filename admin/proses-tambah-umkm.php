<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_umkm                =$_POST['nama_umkm'];
$alamat_umkm              =$_POST['alamat_umkm'];
$jenis_umkm               =$_POST['jenis_umkm'];
$username_umkm            =$_POST['username_umkm'];
$password_umkm            =$_POST['password_umkm'];
$titik_lokasi_umkm        =$_POST['titik_lokasi_umkm'];
$total_pelanggan          =$_POST['total_pelanggan'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into umkm(nama_umkm, alamat_umkm, jenis_umkm, username_umkm, password_umkm,
titik_lokasi_umkm, total_pelanggan) VALUES 
('$nama_umkm', '$alamat_umkm', '$jenis_umkm', '$username_umkm', '$password_umkm',
'$titik_lokasi_umkm', '$total_pelanggan')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah umkm berhasil'); window.location='umkm.php';</script>";
}else{
echo "<script> alert('Proses tambah umkm gagal'); history.back();</script>";
}


?>