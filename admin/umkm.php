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
    <h1 class="m-0 text-dark">Halaman Kelola UMKM</h1>
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
<a href="add-umkm.php" class="btn btn-primary">Tambah Umkm</a><br></br>
    <div class="row">
    <div class="col-md-12">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Kelola Umkm</h3>
    </div>
<?php
    include "../config/koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM umkm");
    ?>
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jenis</th>
    <th>Username</th>
    <th>Password</th>
    <th>Titik Lokasi</th>
    <th>Total Pelanggan</th>
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
<td><?php echo $row['nama_umkm'];?></td>
<td><?php echo $row['alamat_umkm']; ?></td>
<td><?php echo $row['jenis_umkm']; ?></td>
<td><?php echo $row['username_umkm']; ?></td>
<td><?php echo $row['password_umkm']; ?></td>
<td><?php echo $row['titik_lokasi_umkm']; ?></td>
<td><?php echo $row['total_pelanggan']; ?></td>
<td><?php echo $row['updated']; ?></td>
<td><a href="edit-umkm.php?id_umkm=<?php echo $row['id_umkm']; ?>" class="btn btn-warning">Edit</a>
<a href="hapus-umkm.php?id_umkm=<?php echo $row['id_umkm']; ?>" class="btn btn-danger">Hapus</a>
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