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
                        <h3 class="card-title">Form Edit DetailOrderan</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit detail_orderan
                    $id_detail_order           = $_GET['id_detail_order'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM detail_orderan WHERE id_detail_order = '$id_detail_order'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $id_order         = $row_edit['id_order'];
                    $id_barang     = $row_edit['id_barang'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-detail_orderan.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_detail_order" value="<?php echo $id_detail_order; ?>">
                        <div class="form-group">
                            <label> ID Order</label>
                            <input type="text" value="<?php echo $id_order ?>" name="id_order" class="form-control" placeholder="Masukkan ID Order">
                        </div>
                        <div class="form-group">
                            <label> ID Barang</label>
                            <input type="text" value="<?php echo $id_barang ?>" name="id_barang" class="form-control" placeholder="Masukkan ID Barang">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="detail_orderan.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>