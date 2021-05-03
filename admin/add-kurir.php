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
    <h3 class="card-title">Form Tambah Kurir</h3>
    </div>
  <form role="form" action="proses-tambah-kurir.php" method="POST" enctype="multipart/form-data">
  <div class="card-body">
  <div class="form-group">
    <label>Nama Kurir</label>
    <input type="text" name="nama_kurir" class="form-control" placeholder="Masukkan Nama Kurir">
  </div>
   <div class="form-group">
    <label>ID Pembayaran</label>
    <input type="text" name="id_pembayaran" class="form-control" placeholder="Masukkan ID Pembayaran">
  </div>
  <div class="form-group">
    <label>ID Pengiriman</label>
    <input type="text" name="id_pengiriman" class="form-control" placeholder="Masukkan ID Pengiriman">
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