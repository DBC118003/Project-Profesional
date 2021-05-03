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
                        <h3 class="card-title">Form Edit Umkm </h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit umkm
                    $id_umkm           = $_GET['id_umkm'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM umkm WHERE id_umkm = '$id_umkm'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $nama_umkm        = $row_edit['nama_umkm'];
                    $alamat_umkm        = $row_edit['alamat_umkm'];
                    $jenis_umkm       = $row_edit['jenis_umkm'];
                    $username_umkm    = $row_edit['username_umkm'];
                    $password_umkm   = $row_edit['password_umkm'];
                    $titik_lokasi_umkm   = $row_edit['titik_lokasi_umkm'];
                    $total_pelanggan  = $row_edit['total_pelanggan'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-umkm.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_umkm" value="<?php echo $id_umkm; ?>">
                        <div class="form-group">
                            <label> Nama</label>
                            <input type="text" value="<?php echo $nama_umkm ?>" name="nama_umkm" 
                            class="form-control" placeholder="Masukkan Nama Umkm">
                        <div class="form-group">
                            <label> Alamat</label>
                            <input type="text" value="<?php echo $alamat_umkm ?>" name="alamat_umkm" 
                            class="form-control" placeholder="Masukkan Alamat Umkm">
                        <div class="form-group">
                            <label> Jenis</label>
                            <input type="text" value="<?php echo $jenis_umkm ?>" name="jenis_umkm" 
                            class="form-control" placeholder="Masukkan Jenis Umkm">
                        <div class="form-group">
                            <label> Username</label>
                            <input type="password" value="<?php echo $username_umkm ?>" name="username_umkm" 
                            class="form-control" placeholder="Masukkan Username Umkm">
                        <div class="form-group">
                            <label> Password </label>
                            <input type="text" value="<?php echo $password_umkm ?>" name="password_umkm" 
                            class="form-control" placeholder="Masukkan Password Umkm">
                        <div class="form-group">
                            <label> titik lokasi</label>
                            <input type="text" value="<?php echo $titik_lokasi_umkm ?>" name="titik_lokasi_umkm" 
                            class="form-control" placeholder="Masukkan Titik Lokasi Umkm">
                        <div class="form-group">
                            <label> total pelanggan</label>
                            <input type="text" value="<?php echo $total_pelanggan ?>" name="total_pelanggan" 
                            class="form-control" placeholder="Masukkan Total Pelanggan">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="umkm.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>