<?php 
	include('database.php');
	$query = mysqli_query($db,"SELECT * FROM kontak WHERE id_kontak =1");
	$row = mysqli_fetch_assoc($query);
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
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

           <h1 class="my-4">ELMA HIJAB</h1>
          <div class="list-group">
            <a href="Hijab Beria.php" class="list-group-item">Hijab Beria</a>
            <a href="Hijab Amira.php" class="list-group-item">Hijab Amira</a>
            <a href="Hijab Siera.php" class="list-group-item">Hijab Siera</a>
          </div>
      </div>

          <div class="col-lg-9">
          	<div class="row">
<head>
	<style>
		.sjsjjs{
			width: 500px;
			height: 250px;
			background-color: #9adbed;
			margin: auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="sjsjjs">
		<p>PPEMBELIAN ANDA <b>BERHASIL..!!</b></p><br>
		<p>SILAHKAN KONFIRMASI PEMBAYARAN KE NOMER CUSTOMER SERVICE</p>
		<p>Nomer Telphone : <?php echo $row['no_telp'] ?></p>
		<p>Email : <?php echo $row['email'] ?></p>
		<br>
		<a href="index.php">kembali</a>
	</div>
</body>

</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
</div>

</div>

</div>


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