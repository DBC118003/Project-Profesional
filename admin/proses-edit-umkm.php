<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_umkm                    =$_POST['id_umkm'];
$nama_umkm                  =$_POST['nama_umkm'];
$alamat_umkm                =$_POST['alamat_umkm'];
$jenis_umkm                 =$_POST['jenis_umkm'];
$username_umkm              =$_POST['username_umkm'];
$password_umkm              =$_POST['password_umkm'];
$titik_lokasi_umkm          =$_POST['titik_lokasi_umkm'];
$total_pelanggan            =$_POST['total_pelanggan'];

$sql_proses_edit =mysqli_query($koneksi, "UPDATE umkm set  nama_umkm           = '$nama_umkm',
                                                           alamat_umkm         = '$alamat_umkm',
                                                           jenis_umkm          = '$jenis_umkm',
                                                           username_umkm        = '$username_umkm',
                                                           password_umkm        = '$password_umkm',
                                                           titik_lokasi_umkm    = '$titik_lokasi_umkm',
                                                           total_pelanggan      = '$total_pelanggan',
                                                           WHERE id_umkm        = '$id_umkm'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit umkm berhasil'); window.location='umkm.php';</script>";
} else {
    echo "<script> alert('Proses edit umkm gagal'); history.back();</script>";
}

?>