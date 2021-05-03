<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_pelanggan         =$_POST['id_pelanggan'];
$status_order     =$_POST['status_order'];
$harga          =$_POST['harga'];
$tgl_order          =$_POST['tgl_order'];
$id_barang  =$_POST['id_barang'];
$nama_barang    = $_POST['nama_barang'];
$kuantitas  = $_POST['kuantitas'];

//quary insert
$sql = mysqli_query($koneksi, "INSERT into pemesanan_barang(id_pelanggan, status_order, harga, 
tgl_order, id_barang, nama_barang, kuantitas) VALUES 
('$id_pelanggan', '$status_order', 'harga', 'tgl_order', 'id_barang', 'nama_barang', 'kuantitas')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah pemesanan_barang berhasil'); window.location='pemesanan_barang.php';</script>";
}else{
echo "<script> alert('Proses tambah pemesanan_barang gagal'); history.back();</script>";
}


?>