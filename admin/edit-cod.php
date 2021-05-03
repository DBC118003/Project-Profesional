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
                        <h3 class="card-title">Form Edit COD</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit cod
                    $id_cod           = $_GET['id_cod'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM cod WHERE id_cod = '$id_cod'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $id_pelanggan         = $row_edit['id_pelanggan'];
                    $nama_pelanggan   = $row_edit['nama_pelanggan'];
                    $id_barang  =$row_edit['id_barang']
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-cod.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_cod" value="<?php echo $id_cod; ?>">
                        <div class="form-group">
                            <label> ID Pelanggan</label>
                            <input type="text" value="<?php echo $id_pelanggan ?>" name="id_pelanggan" 
                            class="form-control" placeholder="Masukkan ID Pelanggan">
                        </div>
                        <div class="form-group">
                            <label> Nama Pelanggan</label>
                            <input type="text" value="<?php echo $nama_pelanggan ?>" name="nama_pelanggan
                            " class="form-control" placeholder="Masukkan Nama Pelanggan">
                        </div>
                        <div class="form-group">
                            <label> ID Barang</label>
                            <input type="text" value="<?php echo $id_barang ?>" name="id_barang
                            " class="form-control" placeholder="Masukkan ID Barang">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="cod.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>