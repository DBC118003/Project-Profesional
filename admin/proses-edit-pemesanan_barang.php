<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_order           =$_POST['id_order'];
$id_pelanggan        =$_POST['id_pelanggan'];
$status_order   =$_POST['status_order'];
$harga     =$_POST['harga'];
$tgl_order  =$_POST['tgl_order'];
$id_barang     =$_POST['id_barang'];
$nama_barang     =$_POST['nama_barang'];
$kuantitas     =$_POST['kuantitas'];

$sql_proses_edit =mysqli_query($koneksi, "UPDATE pemesanan_barang set id_pelanggan   = '$id_pelanggan',
                                                           status_order  = '$status_order',
                                                           harga    = '$harga',
                                                           tgl_order    = '$tgl_order',
                                                           id_barang    = '$id_barang',
                                                           nama_barang  = '$nama_barang',
                                                           kuantitas    = '$kuantitas',
                                                           WHERE id_order = '$id_order'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit pemesanan_barang berhasil'); window.location='pemesanan_barang.php';</script>";
} else {
    echo "<script> alert('Proses edit pemesanan_barang gagal'); history.back();</script>";
}

?>