<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_pembayaran           =$_POST['id_pembayaran'];
$id_pelanggan   =$_POST['id_pelanggan'];
$id_barang  =$_POST['id_barang'];
$nama_barang    =$_POST['nama_barang'];
$harga_bayar    =$_POST['harga_bayar'];
$total  =$_POST['total'];
$id_order   =$_POST['id_order'];


$sql_proses_edit =mysqli_query($koneksi, "UPDATE pembayaran set id_pelanggan   = '$id_pelanggan',
                                                                id_barang  = '$id_barang',
                                                                nama_barang    = '$nama_barang',
                                                                harga_bayar    = '$harga_bayar',
                                                                total  = '$total',
                                                                id_order   = '$id_order',
                                                                WHERE id_pembayaran  = '$id_pembayaran'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit pembayaran berhasil'); window.location='pembayaran.php';</script>";
} else {
    echo "<script> alert('Proses edit pembayaran gagal'); history.back();</script>";
}

?>