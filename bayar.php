<?php 
  session_start();
  include('database.php');
  //$kontak = mysqli_query($db,"SELECT * FROM kontak WHERE id=1");
  //$row1=mysqli_fetch_assoc($kontak);
  $no=1;
if (isset($_POST['save'])) {
  $nama = $_POST['nama'];
  $alamat=$_POST['alamat'];
  $no_telp=$_POST['no_telp'];
  $tanggal=date('Y-m-d');
  $status = 'Belum Terkirim';
  foreach ($_SESSION['keranjang'] as $id => $jumlah) {
    $query = mysqli_query($db,"INSERT INTO pembelian VALUES(NULL,'$nama','$alamat','$no_telp','$tanggal','$id','$jumlah','$status')");
    $query1=mysqli_query($db, "UPDATE produk SET stok=stok-$jumlah WHERE id_prdk='$id' ");
  };
  if ($query) {
    unset($_SESSION['keranjang']);
    header('location:berhasil.php');
  } else {
    echo "GAGAL";
  }
  
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
        
    

    <!-- Page Content -->

        <div class="col-lg-9">
        <div class="row">
          <br><br>
         <div class="alert alert-info" style="color: black;">
          LENGKAPI DATA ANDA UNTUK MELANJUTKAN PEMBELIAN
         </div>
          <form action="" method="post">
            <div class="input-gruop">
            <span>MASUKAN NAMA ANDA</span>
            <input type="text" name="nama" class="form-control" style="width: 500px;" required="">
          </div>
          <div class="input-gruop">
            <span>MASUKAN ALAMAT ANDA</span>
            <input type="text" name="alamat" class="form-control" style="width: 500px;" required="">
          </div>
          <div class="input-gruop">
            <span>MASUKAN NOMER HP ANDA</span>
            <input type="text" name="no_telp" class="form-control" style="width: 500px;" required="">
          </div>
          
          <br><br>
         <input type="submit" name="save" value="LANJUTKAN PEMBELIAN" class="btn btn-info">
          </form>
        </div>
      
       

      </div>
      <!-- /.row -->
<br>

      </div>

      <!-- /.row -->
      <hr>
     
      <hr>
      <br><br><br><br>


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
