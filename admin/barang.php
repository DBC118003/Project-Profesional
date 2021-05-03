<?php
session_start();
include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if (empty($_SESSION['username_admin']) AND empty($_SESSION['password_admin']) ){
    echo "<script> window.location = 'login.php'</script>";
};
?>
<?php
 include "header.php";
 include "sidebar.php";
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Kelola Barang</h3>
                 </div>
                 <?php
                 include "../config/koneksi.php";
                 //deklarasi edit
                 $id_barang = $_GET['id_barang'];
                 $sql_edit = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
                 $row_edit = mysqli_fetch_array($sql_edit);
                 $nama_barang = $row_edit['nama_barang'];
                 $gambar_barang = $row_edit['gambar_barang'];
                 $deskripsi_barang =$row_edit['deskripsi_barang'];
                 $stok = $row_edit['stok'];
                 $harga_barang = $row_edit['harga_barang'];
                 $id_umkm = $row_edit['id_umkm'];

                 //$updated = $row_edit['updated'];
                 ?>
                 <form role="form" action="proses-tambah-barang.php" method="POST" enctype="multipart/form-data">
                 <div class="card-body">
                 <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
                
                 <div class="form-group">
                    <label> Nama Barang </label>
                     <input type="text" value="<?php echo $nama_barang ?>" name="nama_barang"
                     class="form-control" required="required" placeholder="Masukkan Nama Barang">
                 </div>
                <div class="form-group">
                    <label for="gambar" > Gambar Barang </label>
                     <input type="file" accept=".jpeg,.jpg,.png" class="form-control" name="gambar_barang" id="gambar_barang"
                     required="required" placeholder="Masukkan Gambar Barang">
                </div>
                <div class="form-group">
                    <label> Deskripsi Barang </label>
                     <input type="text" value="<?php echo $deskripsi_barang ?>" name="deskripsi_barang"
                     class="form-control" required="required" placeholder="Masukkan Deskripsi Barang">
                 </div>
                 <div class="form-group">
                    <label> stok </label>
                     <input type="text" value="<?php echo $stok ?>" name="stok"
                     class="form-control" required="required" placeholder="Masukkan stok Barang">
                 </div>
                 <div class="form-group">
                    <label> Harga Barang </label>
                     <input type="text" value="<?php echo $harga_barang ?>" name="harga_barang"
                     class="form-control" required="required" placeholder="Masukkan Harga Barang">
                 </div>
                 <div class="form-group">
                    <label> ID Umkm </label>
                     <input type="text" value="<?php echo $id_umkm ?>" name="id_umkm"
                     class="form-control" required="required" placeholder="Masukkan ID Umkm">
                 </div>
                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary"> Tambah </button>
                  <a href="barang.php" class="btn btn-danger"> Batal </a>
            </div>
            </div>
        </form>
    </div>
</div>
</div>
<div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Barang</h3>
                 </div>
                 <?php
                include "../config/koneksi.php";
                $sql = mysqli_query($koneksi, "SELECT * FROM barang");
                ?>


               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Gambar Barang</th>
                          <th>Deskripsi Barang</th>
                          <th>stok</th>
                          <th>Harga Barang</th>
                          <th>ID Umkm</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                
                <?php
                $no = 1;
                while($row = mysqli_fetch_array($sql)){
                ?>

                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_barang']; ?></td>

                            <td> <img src="../barang/<?php echo $row['gambar_barang']; ?>" style="width: 100px; height; 75px;"></td>
                            <td><?php echo $row['deskripsi_barang']; ?></td>
                            <td><?php echo $row['stok']; ?></td>
                            <td><?php echo $row['harga_barang']; ?></td>
                            <td><?php echo $row['id_umkm']; ?></td>
                            <td> <a href="edit-barang.php?id_barang=<?php echo $row['id_barang']; ?>" class="btn btn-warning">Edit</a>
                                 <a href="hapus-barang.php?id_barang=<?php echo $row['id_barang']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                <?php } ?>

                      </tbody>
                  </table>
               </div>

    </div>
</div>
</div>
</div>
</section>
<?php include "footer.php"; ?>