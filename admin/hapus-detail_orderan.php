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
$id_detail_order = $_GET['id_detail_order'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM detail_orderan WHERE id_detail_order = '$id_detail_order'");

//logika
if($sql_hapus){
    echo "<script> alert('Proses Hapus berhasil'); window.location='detail_orderan.php';</script>";
} else {
    echo "<script> alert('Proses Hapus gagal'); history.back();</script>";
}

?>