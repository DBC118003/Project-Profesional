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
    <h3 class="card-title">Form Tambah Admin</h3>
    </div>
  <form role="form" action="proses-tambah-admin.php" method="POST" enctype="multipart/form-data">
  <div class="card-body">
  <div class="form-group">
    <label>Nama Admin</label>
    <input type="text" name="nama_admin" class="form-control" placeholder="Masukkan Nama Anda">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="password" name="username_admin" class="form-control" required="required" placeholder="Masukkan Username Anda">
  </div>
  <div class="form-group">
    <label>Password</label> 
    <input type="text" name="password_admin" class="form-control" required="required" placeholder="Masukkan Password Anda">
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