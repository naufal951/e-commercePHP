<?php 
session_start();
if (!isset($_SESSION['FAZA'])){
  header('location:login.php');
} 

 ?>

<!DOCTYPE html>
<html lang="en">

<!--  ---------------------------- HEADER CONTENT ---------------------------------- -->

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.php">Admin</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
    </nav>

<!--  ------------------------------ MENU CONTENT ---------------------------------- -->

    <div id="wrapper">
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="index.php?halaman=produk">
            <i class="fas fa-fw fa-table"></i>
            <span>Produk</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?halaman=pemesanan">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Pembelian</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?halaman=kontak">
            <i class="fas fa-fw fa-table"></i>
            <span>Kontak</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?halaman=about">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Tentang Perusahaan</span></a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="index.php?halaman=admin">
            <i class="fas fa-fw fa-table"></i>
            <span>Admin</span></a>
        </li>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="backup.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Backup</span></a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
        </li>
      </ul>

<!--  -------------------------------- ISI CONTENT ---------------------------------- -->

      <div id="content-wrapper">
        <div class="container-fluid">

             <?php 
        if (isset($_GET['halaman'])) {
                if($_GET['halaman']=='produk'){
                    include('produk.php');
                } elseif ($_GET['halaman']=='tambahproduk') {
                  include('tambahproduk.php');
                } elseif ($_GET['halaman']=='editproduk') {
                 include('editproduk.php');
               }elseif($_GET['halaman']=='about'){
                  include('about.php');
                } elseif($_GET['halaman']=='pemesanan'){
                  include('pemesanan.php');
                } elseif($_GET['halaman']=='kontak'){
                  include('kontak.php');
                } elseif($_GET['halaman']=='detailpemesanan'){
                  include('detailpemesanan.php');
                } elseif($_GET['halaman']=='admin'){
                  include('admin.php');
                } elseif($_GET['halaman']=='tambahadmin'){
                  include('tambahadmin.php');
                } elseif($_GET['halaman']=='hapuspesan'){
                  include 'hapuspesan.php';
                }elseif($_GET['halaman']=='backup'){
                  include('backup.php');
                }elseif ($_GET['halaman']=='pengiriman') {
                  include('pengiriman.php');
                }
        }else{
          include('home.php');
        } 
      

         ?>
          
   
        </div>

<!--  ------------------------------ FOOTER CONTENT ---------------------------------- -->

        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Elma Hijab 2018</span>
            </div>
          </div>
        </footer>

      </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
