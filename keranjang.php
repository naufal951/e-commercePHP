<?php 
 session_start();
  include('database.php');
  error_reporting(0);
  //$kontak = mysqli_query($db,"SELECT * FROM kontak WHERE id=1");
  //$row1=mysqli_fetch_assoc($kontak);
  $no=1;


if (empty($_SESSION['keranjang'] OR !isset($_SESSION['keranjang']))) {
  echo "<script>
      alert('SILAHKAN PILIH BARANG TERLEBIH DAHULU')
      document.location.href='index.php'
      </script> ";
}

 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Elma Hijab</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

           <h1 class="my-4">KATEGORI</h1>
          <div class="list-group">
            <a href="Hijab Beria.php" class="list-group-item">Hijab Beria</a>
            <a href="Hijab Amira.php" class="list-group-item">Hijab Amira</a>
            <a href="Hijab Siera.php" class="list-group-item">Hijab Siera</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          
          <div class="row">
      <br>
          <h2>KERANJANG BELANJA</h2>
          <br><br>
          <table class="table">
            <tr>
              <th>NO</th>
              <th>NAMA BARANG</th>
              <th>SATUAN</th>
              <th>TOTAL</th>
              <th>HAPUS</th>
            </tr>
            <?php  $kes=0; ?>
            <?php foreach ($_SESSION['keranjang'] as $id => $jumlah) : ?>
            <?php 
            $qry = mysqli_query($db,"SELECT * FROM produk WHERE id_prdk='$id'");
            $pecah=mysqli_fetch_assoc($qry);
            $ttl=$pecah['harga']*$jumlah;
             ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $pecah['nama'] ?></td>
              <td><?php echo $jumlah ?></td>
              <td>Rp.<?php echo number_format($ttl) ?>,-</td>
              <td><a href="proseshapus.php?id=<?php echo $id ?>" class="btn btn-danger">HAPUS</a></td>
            </tr>
            <?php $kes+=$ttl ?>
          <?php endforeach ?>
          </table>
          <p>TOTAL BAYAR : Rp.<?php echo number_format($kes) ?>,-</p>
          <div>
            <br><br>
          <a href="bayar.php" class="btn btn-info">BAYAR</a>
          

        </div>
        <br><br>
<br><br><br><br>
        </div>
        <br><br>
        <br><br>
        </div>
        <br><br>


          <!-- /.row -->

        </div>
        <br><br><br><br>
        <!-- /.col-lg-9 -->

      </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
