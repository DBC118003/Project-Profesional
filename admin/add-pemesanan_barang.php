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
    <h3 class="card-title">Form Tambah Pemesanan Barang</h3>
    </div>
  <form role="form" action="proses-tambah-pemesanan_barang.php" method="POST" enctype="multipart/form-data">
  <div class="card-body">
  <div class="form-group">
    <label>ID Pelanggan</label>
    <input type="text" name="id_pelanggan" class="form-control" placeholder="Masukkan ID Pelanggan">
  </div>
   <div class="form-group">
    <label>Status Order</label>
    <input type="text" name="status_order" class="form-control" placeholder="Masukkan Status Order">
  </div>
  <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
  </div>
  <div class="form-group">
    <label>Tanggal Order</label>
    <input type="text" name="tgl_order" class="form-control" placeholder="Masukkan Tanggal Order">
  </div>
  <div class="form-group">
    <label>ID Barang</label>
    <input type="text" name="id_barang" class="form-control" placeholder="Masukkan ID Barang">
  </div>
  <div class="form-group">
    <label>Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
  </div>
  <div class="form-group">
    <label>Kuantitas</label>
    <input type="text" name="kuantitas" class="form-control" placeholder="Masukkan Kuantitas">
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