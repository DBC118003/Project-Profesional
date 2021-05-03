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
    <h3 class="card-title">Form Tambah Barang</h3>
    </div>
  <form role="form" action="proses-tambah-barang.php" method="POST" enctype="multipart/form-data">
  <div class="card-body">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
  </div>
   <div class="form-group">
    <label>Gambar</label>
    <input type="text" name="gambar_barang" class="form-control" placeholder="Masukkan Gambar Barang">
  </div>
   <div class="form-group">
    <label>Deskripsi</label>
    <input type="text" name="deskripsi_barang" class="form-control" placeholder="Masukkan Deskripsi Barang">
  </div>
  <div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok Barang">
  </div>
  <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga_barang" class="form-control" placeholder="Masukkan Harga Barang">
  </div>
  <div class="form-group">
    <label>ID Umkm</label>
    <input type="text" name="id_umkm" class="form-control" placeholder="Masukkan ID Umkm">
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