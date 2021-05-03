<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_order         =$_POST['id_order'];
$id_barang     =$_POST['id_barang'];


//quary insert
$sql = mysqli_query($koneksi, "INSERT into detail_orderan(id_order, id_barang,) VALUES 
('$id_order', '$id_barang')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah detail_orderan berhasil'); window.location='detail_orderan.php';</script>";
}else{
echo "<script> alert('Proses tambah detail_orderan gagal'); history.back();</script>";
}


?>