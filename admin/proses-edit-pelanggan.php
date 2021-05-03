<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_pelanggan             =$_POST['id_pelanggan'];
$nama_pelanggan           =$_POST['nama_pelanggan'];
$alamat_pelanggan         =$_POST['alamat_pelanggan'];
$kota                     =$_POST['kota'];
$no_telepon               =$_POST['no_telepon'];
$email                    =$_POST['email'];
$titik_lokasi_pelanggan   =$_POST['titik_lokasi_pelanggan'];
$username_pelanggan       =$_POST['username_pelanggan'];
$password_pelanggan       =$_POST['password_pelanggan'];


$sql_proses_edit =mysqli_query($koneksi, "UPDATE pelanggan set  nama_pelanggan          = '$nama_pelanggan',
                                                                alamat_pelanggan         = '$alamat_pelanggan',
                                                                kota                     = '$kota',
                                                                no_telepon               = '$no_telepon',
                                                                email                    = '$email',
                                                                titik_lokasi_pelanggan    = '$titik_lokasi_pelanggan',
                                                                username_pelanggan       = '$username_pelanggan',
                                                                password_pelanggan       = '$password_pelanggan',
                                                                WHERE id_pelanggan       = '$id_pelanggan'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit pelanggan berhasil'); window.location='pelanggan.php';</script>";
} else {
    echo "<script> alert('Proses edit pelanggan gagal'); history.back();</script>";
}

?>