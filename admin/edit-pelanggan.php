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
    
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col md-12">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Pelanggan</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit pelanggan
                    $id_pelanggan           = $_GET['id_pelanggan'];
                    $sql_edit               = mysqli_query($koneksi, "SELECT *FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");
                    $row_edit               = mysqli_fetch_array($sql_edit);
                    $nama_pelanggan         = $row_edit['nama_pelanggan'];
                    $alamat_pelanggan       = $row_edit['alamat_pelanggan'];
                    $kota                   = $row_edit['kota'];
                    $no_telepon             = $row_edit['no_telepon'];
                    $email                  = $row_edit['email'];
                    $titik_lokasi_pelanggan = $row_edit['titik_lokasi_pelanggan'];
                    $username_pelanggan     = $row_edit['username_pelanggan'];
                    $password_pelanggan     = $row_edit['password_pelanggan'];
                    //$updated              = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-pelanggan.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>">
                        <div class="form-group">
                            <label> Nama</label>
                            <input type="text" value="<?php echo $nama_pelanggan ?>" name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama Pelanggan">
                        <div class="form-group">
                            <label> Alamat</label>
                            <input type="text" value="<?php echo $alamat_pelanggan ?>" name="alamat_pelanggan" class="form-control" placeholder="Masukkan Alamat Pelanggan">
                        <div class="form-group">
                            <label> Kota</label>
                            <input type="text" value="<?php echo $kota ?>" name="kota" class="form-control" placeholder="Masukkan Kota Pelanggan">
                        <div class="form-group">
                            <label> No Telepon</label>
                            <input type="password" value="<?php echo $no_telepon ?>" name="no_telepon" class="form-control" placeholder="Masukkan No Telepon Pelanggan">
                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" value="<?php echo $email ?>" name="email" class="form-control" placeholder="Masukkan Email Pelanggan">
                        <div class="form-group">
                            <label> Titik Lokasi</label>
                            <input type="text" value="<?php echo $titik_lokasi_pelanggan ?>" name="titik_lokasi_pelanggan" class="form-control" placeholder="Masukkan Titik Lokasi Pelanggan">
                        <div class="form-group">
                            <label> Username</label>
                            <input type="text" value="<?php echo $username_pelanggan ?>" name="username_pelanggan" class="form-control" placeholder="Masukkan Username Pelanggan">
                            <div class="form-group">
                            <label> Password</label>
                            <input type="text" value="<?php echo $password_pelanggan ?>" name="password_pelanggan" class="form-control" placeholder="Masukkan Password Pelanggan">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="pelanggan.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>