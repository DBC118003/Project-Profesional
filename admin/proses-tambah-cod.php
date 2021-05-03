<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_pelanggan         =$_POST['id_pelanggan'];
$nama_pelanggan    =$_POST['nama_pelanggan'];
$id_barang          =$_POST['id_barang'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into cod(id_pelanggan, nama_pelanggan, id_barang) VALUES 
('$id_pelanggan', '$nama_pelanggan', '$id_barang')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah cod berhasil'); window.location='cod.php';</script>";
}else{
echo "<script> alert('Proses tambah cod gagal'); history.back();</script>";
}


?>