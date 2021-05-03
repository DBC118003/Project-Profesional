<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_kurir           =$_POST['id_kurir'];
$nama_kurir =$_POST['nama_kurir'];
$id_pembayaran  =$_POST['id_pembayaran'];
$id_pengiriman  =$_POST['id_pengiriman'];

$sql_proses_edit =mysqli_query($koneksi, "UPDATE kurir set nama_kurir   = '$nama_kurir',
                                                              id_pembayaran = '$id_pembayaran',
                                                           id_pengiriman  = '$id_pengiriman',
                                                           WHERE id_kurir = '$id_kurir'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit kurir berhasil'); window.location='kurir.php';</script>";
} else {
    echo "<script> alert('Proses edit kurir gagal'); history.back();</script>";
}

?>