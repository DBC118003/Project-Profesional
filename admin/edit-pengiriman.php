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
                        <h3 class="card-title">Form Edit Pengiriman</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit pengiriman
                    $id_pengiriman           = $_GET['id_pengiriman'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM pengiriman WHERE id_pengiriman = '$id_pengiriman'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $id_kurir         = $row_edit['id_kurir'];
                    $id_pelanggan   = $row_edit['id_pelanggan'];
                    $ekspedisi     = $row_edit['eksspedisi'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-pengiriman.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_pengiriman" value="<?php echo $id_pengiriman; ?>">
                        <div class="form-group">
                            <label> ID Kurir </label>
                            <input type="text" value="<?php echo $id_kurir ?>" name="id_kurir" class="form-control" placeholder="Masukkan ID Kurir">
                        </div>
                        <div class="form-group">
                            <label> ID Pelanggan </label>
                            <input type="text" value="<?php echo $id_pelanggan ?>" name="id_pelanggan" class="form-control" placeholder="Masukkan ID Pelanggan">
                        </div>
                        <div class="form-group">
                            <label> Ekspedisi </label>
                            <input type="text" value="<?php echo $ekspedisi ?>" name="ekspedisi" class="form-control" placeholder="Masukkan Ekspedisi">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="pengiriman.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>