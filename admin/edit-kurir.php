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
                        <h3 class="card-title">Form Edit Kurir</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit kurir
                    $id_kurir           = $_GET['id_kurir'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM kurir WHERE id_kurir = '$id_kurir'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $nama_kurir         = $row_edit['nama_kurir'];
                    $id_pembayaran   = $row_edit['id_pembayaran'];
                    $id_pengiriman  =$row_edit['id_pengiriman']
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-kriteria.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_kriteria" value="<?php echo $id_kriteria; ?>">
                        <div class="form-group">
                            <label> Nama Kurir</label>
                            <input type="text" value="<?php echo $nama_kurir ?>" name="nama_kurir" class="form-control" placeholder="Masukkan ID Umkm">
                        </div>
                        <div class="form-group">
                            <label> ID Pembayaran</label>
                            <input type="text" value="<?php echo $id_pembayaran ?>" name="id_pembayaran
                            " class="form-control" placeholder="Masukkan ID Pembayaran">
                        </div>
                        <div class="form-group">
                            <label> ID Pengiriman</label>
                            <input type="text" value="<?php echo $id_pengiriman ?>" name="id_pembayaran
                            " class="form-control" placeholder="Masukkan ID Pembayaran">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="kurir.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>