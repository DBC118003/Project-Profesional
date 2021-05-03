<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_pelanggan           =$_POST['nama_pelanggan'];
$alamat_pelanggan         =$_POST['alamat_pelanggan'];
$kota                     =$_POST['kota'];
$no_telepon               =$_POST['no_telepon'];
$email                    =$_POST['email'];
$titik_lokasi_pelanggan   =$_POST['titik_lokasi_pelanggan'];
$username_pelanggan       =$_POST['username_pelanggan'];
$password_pelanggan       =$_POST['password_pelanggan'];


//quary insert
$sql = mysqli_query($koneksi, "INSERT into pelanggan(nama_pelanggan, alamat_pelanggan, kota, no_telepon, email,
titik_lokasi_pelanggan, username_pelanggan, password_pelanggan) VALUES 
('$nama_pelanggan', '$alamat_pelanggan', '$kota', '$no_telepon', '$email',
'$titik_lokasi_pelanggan', '$username_pelanggan', '$password_pelanggan')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah pelanggan berhasil'); window.location='pelanggan.php';</script>";
}else{
echo "<script> alert('Proses tambah pelanggan gagal'); history.back();</script>";
}


?>