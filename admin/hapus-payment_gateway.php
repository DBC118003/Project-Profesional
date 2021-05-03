<?php
session_start();
include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if (empty($_SESSION['username_admin']) AND empty($_SESSION['password_admin']) ){
    echo "<script> window.location = 'login.php'</script>";
};
?>
<?php
include "../config/koneksi.php";

//deklarasi
$id_payment_gateway = $_GET['id_payment_gateway'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM payment_gateway WHERE id_payment_gateway = '$id_payment_gateway'");

//logika
if($sql_hapus){
    echo "<script> alert('Proses Hapus berhasil'); window.location='payment_gateway.php';</script>";
} else {
    echo "<script> alert('Proses Hapus gagal'); history.back();</script>";
}

?>