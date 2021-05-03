<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$kode_ovo         =$_POST['kode_ovo'];
$kode_gopay    =$_POST['kode_gopay'];


//quary insert
$sql = mysqli_query($koneksi, "INSERT into payment_gateway(kode_ovo, kode_gopay) VALUES 
('$kode_ovo', '$kode_gopay')");

//fungsi logika
if($sql){
echo "<script> alert('Proses tambah payment_gateway berhasil'); window.location='payment_gateway.php';</script>";
}else{
echo "<script> alert('Proses tambah payment_gatewa gagal'); history.back();</script>";
}


?>