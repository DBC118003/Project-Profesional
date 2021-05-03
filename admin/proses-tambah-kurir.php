<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_kurir         =$_POST['nama_kurir'];
$id_pembayaran    =$_POST['id_pembayaran'];
$id_pengiriman          =$_POST['id_pengiriman'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into kurir(nama_kurir, id_pembayaran, id_pengiriman) VALUES 
('$nama_kurir', '$id_pembayaran', '$id_pengiriman')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah kurir berhasil'); window.location='kurir.php';</script>";
}else{
echo "<script> alert('Proses tambah kurir gagal'); history.back();</script>";
}


?>