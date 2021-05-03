<?php
include "../config/koneksi.php";

//bagian deklarasi
$id_barang             =$_POST['id_barang'];
$nama_barang           =$_POST['nama_barang'];
$deskripsi_barang                     =$_POST['deskripsi_barang'];
$stok               =$_POST['stok'];
$harga_barang                    =$_POST['harga_barang'];
$id_umkm   =$_POST['id_umkm'];


$lokasi_file = $_FILES ['gambar_barang']['tmp_name'];
$nama_file = $_FILES ['gambar_barang']['name'];
$ukuran = $_FILES ['gambar_barang']['size'];

if(empty($lokasi_file)) {
    $query = "UPDATE barang SET nama_barang = '$nama_barang', deskripsi_barang = '$deskripsi_barang', stok = '$stok', harga_barang ='$harga_barang' WHERE id_barang ='$id_barang'";
} elseif ($ukuran <= 2048000) {
    move_uploaded_file($lokasi_file, '../barang/' .$nama_file); 
    $query ="UPDATE barang  SET nama_barang = '$nama_barang', gambar_barang ='$nama_file', deskripsi_barang = '$deskripsi_barang', stok = '$stok', harga_barang ='$harga_barang' WHERE id_barang ='$id_barang'";
}  elseif ($ukuran = 2048000) {
    echo "<script> alert('ukuran gambar $nama_file lebih dari 2 MB, tidak bisa tambah data'); window.loction='barang.php' </script>";
} else {
    $query = "UPDATE barang SET WHERE id_barang ='$id_barang' WHERE id_barang='$id_barang'";
}

$hasil = mysqli_query($koneksi,$query);
if ($hasil){
    echo "<script> alert('Data Barang Berhasil di Edit'); 
    window.location='barang.php'</script>";
} else{
    echo "<script> alert('Data Barang Gagal di Edit'); 
    window.location='barang.php'</script>";
}