<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_admin           =$_POST['id_admin'];
$nama_admin         =$_POST['nama_admin'];
$username_admin     =$_POST['username_admin'];
$password_admin     =$_POST['password_admin'];

$sql_proses_edit =mysqli_query($koneksi, "UPDATE admin set nama_admin   = '$nama_admin',
                                                           username_admin  = '$username_admin',
                                                           password_admin    = '$password_admin'
                                                           WHERE id_admin = '$id_admin'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit admin berhasil'); window.location='admin.php';</script>";
} else {
    echo "<script> alert('Proses edit admin gagal'); history.back();</script>";
}

?>