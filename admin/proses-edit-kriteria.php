<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_kriteria           =$_POST['id_kriteria'];
$id_umkm        =$_POST['id_umkm'];
$kriteria_umkm   =$_POST['kriteria_umkm'];


$sql_proses_edit =mysqli_query($koneksi, "UPDATE kriteria set id_umkm   = '$id_umkm',
                                                           kriteria_umkm  = '$kriteria_umkm',
                                                           WHERE id_kriteria = '$id_kriteria'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit kriteria berhasil'); window.location='kriteria.php';</script>";
} else {
    echo "<script> alert('Proses edit kriteria gagal'); history.back();</script>";
}

?>