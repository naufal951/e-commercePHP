<?php session_start(); ?>
<?php 
  include('database.php');
  $id=$_GET['id'];
  $query=mysqli_query($db,"SELECT * FROM produk WHERE id_prdk='$id'");
  $row=mysqli_fetch_assoc($query);
  
  //$kontak = mysqli_query($db,"SELECT * FROM kontak WHERE id=1");
  //$row1=mysqli_fetch_assoc($kontak);

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

        <div class="col-lg-9">
          <br>
        <h2 class="col-sm-4"><?php echo $row['jenis'] ?></h2>
          <br><hr>
            <div class="row">
              <div class="col-sm-6">
             <img class="card-img-top" src="admin/pict/<?php echo $row['foto']?>" alt="">
            </div>
            <div class="col-sm-6">
              <h2><?php echo $row['nama'] ?></h2>
              <p><?php echo $row['deskripsi'] ?></p>
              <h3>Rp.<?php echo number_format($row['harga']) ?>,-</h3>
              <h5>STOK : <?php echo number_format($row['stok'])?> </h5>
              <hr>
              <form method="post">
                <div class="form-group">
                  <span>JUMLAH PEMBELIAN</span>
                  <input type="number" name="jumlah" min="1" class="form-control">
                </div>
                <div class="input-group-btn">
                  <button class="btn btn-primary" name="beli">BELI</button>
                   <a href="index.php" class="btn btn-primary">LANJUT BELANJA</a>
                </div>
              </form>
            </div>
            </div>
          <br><br>
        </div>
       
     
        

      </div>
      <!-- /.row -->
<br>
<?php 
      if (isset($_POST['beli'])) {
          $jumlah = $_POST['jumlah'];
          $_SESSION['keranjang'][$id]=$jumlah;
          echo "<script>
            alert('PRODUK DITAMBAH DARI KERANJANG')
            document.location.href='keranjang.php'
            </script>
          ";
      }
       ?>
     
      
      
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
