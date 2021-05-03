<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_admin         =$_POST['nama_admin'];
$username_admin     =$_POST['username_admin'];
$password_admin     =$_POST['password_admin'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into admin(nama_admin, username_admin, password_admin) VALUES 
('$nama_admin', '$username_admin', '$password_admin')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah admin berhasil'); window.location='admin.php';</script>";
}else{
echo "<script> alert('Proses tambah admin gagal'); history.back();</script>";
}


?>