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
                        <h3 class="card-title">Form Edit Barang</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit barang
                    $id_barang          = $_GET['id_barang'];
                    $sql_edit               = mysqli_query($koneksi, "SELECT *FROM barang WHERE id_barang = '$id_barang'");
                    $row_edit               = mysqli_fetch_array($sql_edit);
                    $nama_barang        = $row_edit['nama_barang'];
                    $gambar_barang       = $row_edit['gambar_barang'];
                    $deskripsi_barang                   = $row_edit['deskripsi_barang'];
                    $stok             = $row_edit['stok'];
                    $harga_barang                  = $row_edit['harga_barang'];
                    $id_umkm = $row_edit['id_umkm'];
                    //$updated              = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-barang.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
                        <div class="form-group">
                            <label> Nama</label>
                            <input type="text" value="<?php echo $nama_barang ?>" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                            <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" accept=".jpeg,.jpg,.png" class="form-control" name="gambar" id="gambar" required="required" />
                        <span class="text-danger">"Maksimal Ukuran Foto 2 MB"</span>
                      </div>
                        <div class="form-group">
                            <label> Deskripsi</label>
                            <input type="text" value="<?php echo $deskripsi_barang ?>" name="deskripsi_barang" class="form-control" placeholder="Masukkan Deskripsi Barang">
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" value="<?php echo $stok ?>" name="stok" class="form-control" placeholder="Masukkan Stok Barang">
                        <div class="form-group">
                            <label> Harga </label>
                            <input type="text" value="<?php echo $harga_barang ?>" name="harga_barang" class="form-control" placeholder="Masukkan Harga Barang">
                        <div class="form-group">
                            <label> id_umkm</label>
                            <input type="text" value="<?php echo $id_umkm ?>" name="id_umkm" class="form-control" placeholder="Masukkan id_umkm">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="barang.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>