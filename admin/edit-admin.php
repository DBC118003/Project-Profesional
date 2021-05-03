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
                        <h3 class="card-title">Form Edit Admin </h3>
                    </div>
                    <?php
                    include "../config/koneksi.php";
                    //deklarasi pemanggilan edit admin
                    $id_admin           = $_GET['id_admin'];
                    $sql_edit           = mysqli_query($koneksi, "SELECT *FROM admin WHERE id_admin = '$id_admin'");
                    $row_edit           = mysqli_fetch_array($sql_edit);
                    $nama_admin         = $row_edit['nama_admin'];
                    $username_admin     = $row_edit['username_admin'];
                    $password_admin     = $row_edit['password_admin'];
                    //$updated        = $row_edit['updated'];
                    ?>

                    <form role="form" action="proses-edit-admin.php" method="POST" enctype="multipart/form-data">

                     <div class="card-body">
                        <input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>">
                        <div class="form-group">
                            <label> Nama</label>
                            <input type="text" value="<?php echo $nama_admin ?>" name="nama_admin" class="form-control" placeholder="Masukkan Username Anda">
                        </div>
                        <div class="form-group">
                            <label> Username</label>
                            <input type="password" value="<?php echo $username_admin ?>" name="username_admin" class="form-control" placeholder="Masukkan Password Anda">
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input type="text" value="<?php echo $password_admin ?>" name="password_admin" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Edit </button>
                            <a href="admin.php" class="btn btn-danger"> Batal </a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>