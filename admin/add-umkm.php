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
    <h3 class="card-title">Form Tambah Umkm</h3>
    </div>
  <form role="form" action="proses-tambah-umkm.php" method="POST" enctype="multipart/form-data">
  <div class="card-body">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_umkm" class="form-control" placeholder="Masukkan Nama Umkm">
  </div>
   <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat_umkm" class="form-control" placeholder="Masukkan Alamat Umkm">
  </div>
   <div class="form-group">
    <label>Jenis</label>
    <input type="text" name="jenis_umkm" class="form-control" placeholder="Masukkan Jenis Umkm">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="password" name="username_umkm" class="form-control" required="required" placeholder="Masukkan Username Umkm">
  </div>
  <div class="form-group">
    <label>Password</label> 
    <input type="text" name="password_umkm" class="form-control" required="required" placeholder="Masukkan Password Umkm">
  </div>
  <div class="form-group">
    <label>Titik Lokasi</label>
    <input type="text" name="titik_lokasi_umkm" class="form-control" placeholder="Masukkan Titik Lokasi Umkm">
  </div>
  <div class="form-group">
    <label>Total Pelanggan</label>
    <input type="text" name="total_pelanggan" class="form-control" placeholder="Masukkan Total Pelanggan">
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