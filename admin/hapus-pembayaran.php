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
$id_pembayaran = $_GET['id_pembayaran'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'");

//logika
if($sql_hapus){
    echo "<script> alert('Proses Hapus berhasil'); window.location='pembayaran.php';</script>";
} else {
    echo "<script> alert('Proses Hapus gagal'); history.back();</script>";
}

?>