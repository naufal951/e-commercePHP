<?php 
$nama = $_SESSION['data'];
	include('../database.php');
	$produk = mysqli_query($db,"SELECT * FROM produk");
	
	$pembelian= mysqli_query($db,"SELECT * FROM pembelian");
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>Home <?php echo $nama ?></h2>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel panel-heading">
					<center><span><b>PRODUK</b></span></center>
				</div>
				<div class="panel panel-body">
					<p>JUMLAH PRODUK : <?php echo mysqli_num_rows($produk) ?></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel panel-heading">
					<center><span><b>PEMESANAN PRODUK</b></span></center>
				</div>
				<div class="panel panel-body">
					<p>JUMLAH PEMBELIAN PRODUK : <?php echo mysqli_num_rows($pembelian) ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>