<?php 
 include('database.php');
if (!isset($_SESSION['FAZA'])){
  
} 
 $about=mysqli_query($db,"SELECT * FROM about WHERE id_about = 1");
 $row=mysqli_fetch_assoc($about);

 $beria = mysqli_query($db,"SELECT * FROM produk  WHERE jenis = 'Hijab Beria' ORDER BY id_prdk DESC LIMIT 3;"); 
 $amira = mysqli_query($db,"SELECT * FROM produk WHERE jenis = 'Hijab Amira' ORDER BY id_prdk DESC LIMIT 3;");
 $siera = mysqli_query($db,"SELECT * FROM produk WHERE jenis = 'Hijab Siera' ORDER BY id_prdk DESC LIMIT 3;");
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

    <title>Elma Hijab</title>

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
<br>
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



        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="admin/pict/Header1.jpg" style="width: 900px; height: 320px;" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="admin/pict/header2.jpg" style="width: 900px; height: 320px;" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="admin/pict/header3.jpg" style="width: 900px; height: 320px;" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
      <?php while ($row=mysqli_fetch_assoc($beria)):?>

        <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="detailproduk.php?id=<?php echo $row['id_prdk']?>"><img class="card-img-top" src="admin/pict/<?php echo $row['foto']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="detailproduk.php?id=<?php echo $row['id_prdk']?>"><?php echo $row['nama'] ?></a>
                  </h4>
                  <h5 class="card-tittle" style="color: black;">Rp.<?php echo number_format($row['harga'])?>,-</h5>
                  <p class="card-text" style="color: black;"><?php echo $row['deskripsi']?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>

              </div>
            </div>
             <?php endwhile ?> 
  
          </div>
          <!-- /.row -->
          <div class="row">
      <?php while ($row=mysqli_fetch_assoc($amira)):?>

        <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="detailproduk.php?id=<?php echo $row['id_prdk']?>"><img class="card-img-top" src="admin/pict/<?php echo $row['foto']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="detailproduk.php?id=<?php echo $row['id_prdk']?>"><?php echo $row['nama'] ?></a>
                  </h4>
                  <h5 class="card-tittle" style="color: black;">Rp.<?php echo number_format($row['harga'])?>,-</h5>
                  <p class="card-text" style="color: black;"><?php echo $row['deskripsi']?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>

              </div>
            </div>
            <?php endwhile ?> 
          </div>

          <div class="row">
      <?php while ($row=mysqli_fetch_assoc($siera)):?>

        <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="detailproduk.php?id=<?php echo $row['id_prdk']?>"><img class="card-img-top" src="admin/pict/<?php echo $row['foto']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="detailproduk.php?id=<?php echo $row['id_prdk']?>"><?php echo $row['nama'] ?></a>
                  </h4>
                  <h5 class="card-tittle" style="color: black;">Rp.<?php echo number_format($row['harga'])?>,-</h5>
                  <p class="card-text" style="color: black;"><?php echo $row['deskripsi']?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>

              </div>
            </div>
            <?php endwhile ?> 
          </div>


        </div>
        <!-- /.col-lg-9 -->


      </div>
      <!-- /.row -->


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
