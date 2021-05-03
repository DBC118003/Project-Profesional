<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_detail_order           =$_POST['id_detail_order'];
$id_order         =$_POST['id_order'];
$id_barang     =$_POST['id_barang'];


$sql_proses_edit =mysqli_query($koneksi, "UPDATE detail_orderan set id_order   = '$id_order',
                                                           id_barang  = '$id_barang',
                                                           WHERE id_detail_order = '$id_detail_order'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit detail_orderan berhasil'); window.location='detail_orderan.php';</script>";
} else {
    echo "<script> alert('Proses edit detail_orderan gagal'); history.back();</script>";
}

?>