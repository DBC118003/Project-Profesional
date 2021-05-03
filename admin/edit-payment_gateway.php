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
                        <h3 class="card-title">Form Edit Payment Gateway</h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit payment_gateway
                    $id_payment_gateway           = $_GET['id_payment_gateway'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM payment_gateway WHERE id_payment_gateway = '$id_payment_gateway'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $kode_ovo         = $row_edit['kode_ovo'];
                    $kode_gopay   = $row_edit['kode_gopay'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-payment_gateway.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_payment_gateway" value="<?php echo $id_payment_gateway; ?>">
                        <div class="form-group">
                            <label> Kode OVO</label>
                            <input type="text" value="<?php echo $kode_ovo ?>" name="kode_ovo" 
                            class="form-control" placeholder="Masukkan Kode OVO">
                        </div>
                        <div class="form-group">
                            <label> Kode GOPAY</label>
                            <input type="text" value="<?php echo $kode_gopay ?>" name="kode_gopay
                            " class="form-control" placeholder="Masukkan Kode GOPAY">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="payment_gateway.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>