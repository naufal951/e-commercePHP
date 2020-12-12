<?php 
  include('database.php');

  $about=mysqli_query($db,"SELECT * FROM about WHERE id_about = 1");
  $row=mysqli_fetch_assoc($about);
  $kontak = mysqli_query($db,"SELECT * FROM kontak WHERE id_kontak=1");
  $row1=mysqli_fetch_assoc($kontak);

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
         <div class="col-lg-9">
          <h2 class="my-4">TENTANG ELMA HIJAB</h2>
          <p><?php echo $row['about'] ?>.</p>
          <br><br>
        </div>
        <div class="col-sm-4">
          <h2 class="mt-4">Contact</h2>
          <address>
            <strong>Alamat Tokoh Kami</strong>
            <br><?php echo $row1['alamat_kontak'] ?>
            <br>
          </address>
          <address>
            <abbr title="Phone">Phone:</abbr>
            <?php echo $row1['no_telp'] ?>
            <br>
            <abbr title="Email">E-mail:</abbr>
            <a href="mailto:#"><?php echo $row1['email'] ?></a>
          </address>
        </div>

        </div>
      </div>
   <br><br><br><br><br><br>
   <br><br><br><br><br><br>
        

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
