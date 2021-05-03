<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_pengiriman           =$_POST['id_pengiriman'];
$id_kurir        =$_POST['id_kurir'];
$id_pelanggan   =$_POST['id_pelanggan'];
$ekspedisi     =$_POST['ekspedisi'];


$sql_proses_edit =mysqli_query($koneksi, "UPDATE pengiriman set id_kurir   = '$id_kurir',
                                                           id_pelanggan  = '$id_pelanggan',
                                                           ekspedisi    = '$ekspedisi',
                                                           WHERE id_pengiriman = '$id_pengiriman'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit pengiriman berhasil'); window.location='pengiriman.php';</script>";
} else {
    echo "<script> alert('Proses edit pengiriman gagal'); history.back();</script>";
}

?>