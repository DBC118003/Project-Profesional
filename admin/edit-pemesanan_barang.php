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
                        <h3 class="card-title">Form Edit Pemesanan Barang</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit pemesanan_barang
                    $id_order           = $_GET['id_order'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM pemesanan_barang WHERE id_order = '$id_order'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $id_pelanggan         = $row_edit['id_pelanggan'];
                    $status_order   = $row_edit['status_order'];
                    $harga     = $row_edit['harga'];
                    $tgl_order  = $row_edit['tgl_order'];
                    $id_barang  = $row_edit['id_barang'];
                    $nama_barang = $row_edit['nama_barang'];
                    $kuantitas  = $row_edit['kuantitas'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-pemesanan_barang.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_order" value="<?php echo $id_order; ?>">
                        <div class="form-group">
                            <label> ID Pelanggan</label>
                            <input type="text" value="<?php echo $id_pelanggan ?>" name="id_pelanggan" class="form-control" placeholder="Masukkan ID Pelanggan">
                        </div>
                        <div class="form-group">
                            <label> Status Order</label>
                            <input type="text" value="<?php echo $status_order ?>" name="status_order" class="form-control" placeholder="Masukkan Status Order">
                        </div>
                        <div class="form-group">
                            <label> Harga</label>
                            <input type="text" value="<?php echo $harga ?>" name="harga" class="form-control" placeholder="Masukkan Harga">
                        </div>
                        <div class="form-group">
                            <label> Tanggal Order</label>
                            <input type="text" value="<?php echo $tgl_order ?>" name="tgl_order" class="form-control" placeholder="Masukkan Tanggal Order">
                        </div>
                        <div class="form-group">
                            <label> ID Barang</label>
                            <input type="text" value="<?php echo $id_barang ?>" name="id_barang" class="form-control" placeholder="Masukkan ID Barang">
                        </div>
                        <div class="form-group">
                            <label> Nama Barang</label>
                            <input type="text" value="<?php echo $nama_barang ?>" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                        </div>
                        <div class="form-group">
                            <label> Kuantitas</label>
                            <input type="text" value="<?php echo $kuantitas ?>" name="kuantitas" class="form-control" placeholder="Masukkan Kuantitas">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="pemesanan_barang.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>