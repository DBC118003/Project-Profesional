<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_kurir         =$_POST['id_kurir'];
$id_pelanggan     =$_POST['id_pelanggan'];
$ekspedisi          =$_POST['ekspedisi'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into pengiriman(id_kurir, id_pelanggan, ekspedisi) VALUES 
('$id_kurir', '$id_pelanggan', '$ekspedisi')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah pengiriman berhasil'); window.location='pengiriman.php';</script>";
}else{
echo "<script> alert('Proses tambah pengriman gagal'); history.back();</script>";
}


?>