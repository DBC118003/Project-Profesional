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
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0 text-dark">Halaman Kelola Pembayaran</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
    </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
<a href="add-pembayaran.php" class="btn btn-primary">Tambah Pembayaran</a><br></br>
    <div class="row">
    <div class="col-md-12">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Kelola Pembayaran</h3>
    </div>
<?php
    include "../config/koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran");
    ?>
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
    <th>No</th>
    <th>id_pelanggan</th>
    <th>id_barang</th>
    <th>Nama Barang</th>
    <th>Harga Bayar</th>
    <th>Total</th>
    <th>id_order</th>
    <th>Updated</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
<?php
$no = 1;
     while($row = mysqli_fetch_array($sql)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['id_pelanggan'];?></td>
<td><?php echo $row['id_barang']; ?></td>
<td><?php echo $row['nama_barang']; ?></td>
<td><?php echo $row['harga_bayar']; ?></td>
<td><?php echo $row['total']; ?></td>
<td><?php echo $row['id_order']; ?></td>
<td><?php echo $row['updated']; ?></td>
<td><a href="edit-pembayaran.php?id_pembayaran=<?php echo $row['id_pembayaran']; ?>" class="btn btn-warning">Edit</a>
<a href="hapus-pembayaran?id_pembayaran=<?php echo $row['id_pembayaran']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php 
} 
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- /.content-wrapper -->

<?php include "footer.php"; ?>