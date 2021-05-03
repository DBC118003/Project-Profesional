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
$id_umkm = $_GET['id_umkm'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM umkm WHERE id_umkm = '$id_umkm'");

//logika
if($sql_hapus){
    echo "<script> alert('Proses Hapus berhasil'); window.location='umkm.php';</script>";
} else {
    echo "<script> alert('Proses Hapus gagal'); history.back();</script>";
}

?>