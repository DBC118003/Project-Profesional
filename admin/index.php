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
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM admin");
          $id_admin = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_admin;?></div> </h3>

            <p>Data Admin</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
          <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM umkm");
          $id_umkm = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_umkm;?></div> </h3>

            <p>Data Umkm</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="umkm.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM kriteria");
          $id_kriteria = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_kriteria;?></div> </h3>

            <p>Data Kriteria</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="kriteria.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan");
          $id_pelanggan = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_pelanggan;?></div> </h3>

            <p>Data Pelanggan</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="pelanggan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM barang");
          $id_barang = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_barang;?></div> </h3>

            <p>Data Barang</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="barang.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM detail_orderan");
          $id_detail_order = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_detail_order;?></div> </h3>

            <p>Data Detail Orderan</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="detail_orderan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM pemesanan_barang");
          $id_order = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_order;?></div> </h3>

            <p>Data Pemesanan Barang</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="pemesanan_barang.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran");
          $id_pembayaran = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_pembayaran;?></div> </h3>

            <p>Data Pembayaran</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="pembayaran.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM cod");
          $id_cod = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_cod;?></div> </h3>

            <p>Data COD</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="cod.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM payment_gateway");
          $id_payment_gateway = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_payment_gateway;?></div> </h3>

            <p>Data Payment Gateway</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="payment_gateway.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM pengiriman");
          $id_pengiriman = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_pengiriman;?></div> </h3>

            <p>Data Pengiriman</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="pengiriman.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <?php
          include "../config/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT * FROM kurir");
          $id_kurir = mysqli_num_rows($sql);
      ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-orange"> <!-- untuk ubah warna -->
          <div class="inner">
            <h3><div> <?php echo $id_kurir;?></div> </h3>

            <p>Data Kurir</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="kurir.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
include "footer.php";
?>