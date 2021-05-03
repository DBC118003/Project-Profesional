<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_pelanggan         =$_POST['id_pelanggan'];
$id_barang     =$_POST['id_barang'];
$nama_barang    =$_POST['nama_barang'];
$harga_bayar    =$_POST['harga_bayar'];
$total      =$_POST['total'];
$id_order   =$_POST['id_order'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into pembayaran(id_pelanggan, id_barang, nama_barang, harga_bayar, total, id_order) VALUES 
('$id_pelanggan', '$id_barang', '$nama_barang', '$harga_bayar', '$total', '$id_order')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah pembayaran berhasil'); window.location='pembayaran.php';</script>";
}else{
echo "<script> alert('Proses tambah pembayaran gagal'); history.back();</script>";
}


?>