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
                        <h3 class="card-title">Form Edit Kriteria</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit kriteria
                    $id_kriteria           = $_GET['id_kriteria'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM kriteria WHERE id_kriteria = '$id_kriteria'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $id_umkm         = $row_edit['id_umkm'];
                    $kriteria_umkm   = $row_edit['kriteria_umkm'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-kriteria.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_kriteria" value="<?php echo $id_kriteria; ?>">
                        <div class="form-group">
                            <label> ID Umkm</label>
                            <input type="text" value="<?php echo $id_umkm ?>" name="id_umkm" class="form-control" placeholder="Masukkan ID Umkm">
                        </div>
                        <div class="form-group">
                            <label> Kriteria Umkm</label>
                            <input type="text" value="<?php echo $kriteria_umkm ?>" name="kriteria_umkm" class="form-control" placeholder="Masukkan Kriteria Umkm">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="kriteria.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>