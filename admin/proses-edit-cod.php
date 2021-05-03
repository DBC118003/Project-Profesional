<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_cod             =$_POST['id_cod'];
$id_pelanggan       =$_POST['id_pelanggan'];
$nama_pelanggan     =$_POST['nama_pelanggan'];
$id_barang          =$_POST['id_barang'];

$sql_proses_edit =mysqli_query($koneksi, "UPDATE cod set    id_pelanggan    = '$id_pelanggan',
                                                            nama_pelanggan  = '$nama_pelanggan',
                                                            id_barang       = '$id_barang',
                                                            WHERE id_cod = '$id_cod'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit cod berhasil'); window.location='cod.php';</script>";
} else {
    echo "<script> alert('Proses edit cod gagal'); history.back();</script>";
}

?>