<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_barang           =$_POST['nama_barang'];
$gambar_barang         =$_POST['gambar_barang'];
$deskripsi_barang      =$_POST['deskripsi_barang'];
$stok                  =$_POST['stok'];
$harga_barang          =$_POST['harga_barang'];
$id_umkm               =$_POST['id_umkm'];



//quary insert
$sql = mysqli_query($koneksi, "INSERT into barang(nama_barang, gambar_barang, deskripsi_barang, stok, harga_barang,
id_umkm) VALUES 
('$nama_barang', '$gambar_barang', '$deskripsi_barang', '$stok', '$harga_barang',
'$id_umkm')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah barang berhasil'); window.location='barang.php';</script>";
}else{
echo "<script> alert('Proses tambah barang gagal'); history.back();</script>";
}


?>