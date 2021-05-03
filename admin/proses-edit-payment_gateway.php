<?php
include "../config/koneksi.php";

//bagian deklarasi
$kode_ovo               =$_POST['kode_ovo'];
$kode_gopay             =$_POST['kode_gopay'];
$id_payment_gateway     =$_POST['id_payment_gateway'];

$sql_proses_edit =mysqli_query($koneksi, "UPDATE payment_gateway set kode_ovo             = '$kode_ovo',
                                                                 kode_gopay               = '$kode_gopay',
                                                                 WHERE id_payment_gateway = '$id_payment_gateway'");


if($sql_proses_edit) {
    echo "<script> alert('Proses edit payment_gateway berhasil'); window.location='payment_gateway.php';</script>";
} else {
    echo "<script> alert('Proses edit payment_gateway gagal'); history.back();</script>";
}

?>