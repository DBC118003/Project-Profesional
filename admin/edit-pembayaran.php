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
                        <h3 class="card-title">Form Edit Pembayaran</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit pembayaran
                    $id_pembayaran           = $_GET['id_pembayaran'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $id_pelanggan         = $row_edit['id_pelanggan'];
                    $id_barang   = $row_edit['id_barang'];
                    $nama_barang     = $row_edit['nama_barang'];
                    $harga_bayar    =$row_edit['harga_bayar'];
                    $total  =$row_edit['total'];
                    $id_order   =$row_edit['id_order'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-pembayaran.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>">
                        <div class="form-group">
                            <label> ID Pelanggan </label>
                            <input type="text" value="<?php echo $id_pelanggan ?>" name="id_pelanggan" class="form-control" placeholder="Masukkan ID Pelanggan">
                        </div>
                        <div class="form-group">
                            <label> ID Barang </label>
                            <input type="text" value="<?php echo $id_barang ?>" name="id_barang" class="form-control" placeholder="Masukkan ID Barang">
                        </div>
                        <div class="form-group">
                            <label> Nama Barang </label>
                            <input type="text" value="<?php echo $nama_barang ?>" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                        </div>
                        <div class="form-group">
                            <label> Harga Bayar </label>
                            <input type="text" value="<?php echo $harga_bayar ?>" name="harga_bayar" class="form-control" placeholder="Masukkan Harga Bayar">
                        </div>
                        <div class="form-group">
                            <label> Total </label>
                            <input type="text" value="<?php echo $total ?>" name="total" class="form-control" placeholder="Masukkan Total">
                        </div>
                        <div class="form-group">
                            <label> ID Order </label>
                            <input type="text" value="<?php echo $id_order ?>" name="id_order" class="form-control" placeholder="Masukkan ID Order">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="pembayaran.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>