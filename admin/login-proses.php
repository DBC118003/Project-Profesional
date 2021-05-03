<?php
//file ini merupakan file login untuk admin
session_start();
include "../config/koneksi.php";

//mendapatkan input dari pengguna
$username_admin=$_POST['username_admin'];
$password_admin=$_POST['password_admin'];

//mencek di database tabel admin adakah username dan password
$login="SELECT * FROM admin WHERE username_admin='$username_admin'";
$cek=mysqli_query($koneksi,$login);
$ketemu=mysqli_num_rows($cek);

$login2="SELECT * FROM admin WHERE password_admin='$password_admin'";
$cek2=mysqli_query($koneksi,$login2);
$ketemu2=mysqli_num_rows($cek2);

$login3="SELECT * FROM admin WHERE username_admin='$username_admin' AND password_admin='$password_admin'";
$cek3=mysqli_query($koneksi,$login3);
$ketemu3=mysqli_num_rows($cek3);

$r=mysqli_fetch_array($cek3);

//menampilkan pesan gagal jika belum memasukkan username dan password
if ($ketemu ==0 & $ketemu2==0){
    echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'login.php'</script>";
}
//menampilkan pesan gagal jika username salah
else if ($ketemu ==0){
    echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'login.php'</script>";
}
//menampilkan pesan gagal jika password salah
else if ($ketemu2 ==0){
    echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'login.php'</script>";
}

//jika ketemu dibuat sesi loginnya
else {
    //detail sesi loginnya
    $_SESSION['id_admin']=$r['id_admin'];
    $_SESSION['nama_admin']=$r['nama_admin'];
    $_SESSION['username_admin']=$r['username_admin'];
    $_SESSION['password_admin']=$r['password_admin'];
    $_SESSION['status']= 'Admin';

//login berhasil
echo "<script> alert ('Login Berhasil');
    window.location = 'index.php'</script>";
}
?>