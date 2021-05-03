<?php
session_start();
include "header.php";
include "sidebar.php";
 ?>  

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
  <h1 class="m-0 text-dark">Beranda</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
  </ol>
  </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col md-12">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form Tambah Pelanggan</h3>
    </div>
  <form role="form" action="proses-tambah-pelanggan.php" method="POST" enctype="multipart/form-data">
  <div class="card-body">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama Pelanggan">
  </div>
   <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat_pelanggan" class="form-control" placeholder="Masukkan Alamat Pelanggan">
  </div>
   <div class="form-group">
    <label>Kota</label>
    <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota Pelanggan">
  </div>
  <div class="form-group">
    <label>No Telepon</label>
    <input type="text" name="no_telepon" class="form-control" placeholder="Masukkan No Telepon Pelanggan">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" placeholder="Masukkan Email Pelanggan">
  </div>
  <div class="form-group">
    <label>Titik Lokasi</label>
    <input type="text" name="titik_lokasi_pelanggan" class="form-control" placeholder="Masukkan Titik Lokasi Pelanggan">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="password" name="username_pelanggan" class="form-control" required="required" placeholder="Masukkan Username Pelanggan">
  </div>
  <div class="form-group">
    <label>Password</label> 
    <input type="text" name="password_pelanggan" class="form-control" required="required" placeholder="Masukkan Password Pelanggan">
  </div>
  
  <div class="card-footer">
    <button type="submit" class="btn btn-primary"> Tambah </button>
    <button type="reset" class="btn btn-danger"> Batal </button>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
</div>
</section>

<?php include "footer.php"; 
?>