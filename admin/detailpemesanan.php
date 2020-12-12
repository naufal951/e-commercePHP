<?php 
	include ('../database.php');
	$id=$_GET['id'];
	$query=mysqli_query($db,"SELECT * FROM pembelian JOIN produk ON pembelian.id_prdk=produk.id_prdk WHERE id_pembelian='$id'");
	$row=mysqli_fetch_assoc($query);
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<center><h2>DETAIL PEMESANAN</h2></center>
		<hr>
		<span>NAMA PEMESAN</span>
		<h4><?php echo $row['nama_pembeli'] ?></h4>
		<hr>
		<span>ALAMAT PEMESAN</span>
		<h4><?php echo $row['alamat'] ?></h4>
		<hr>
		<span>NOMER TELPON PEMESAN</span>
		<h4><?php echo $row['no_telp'] ?></h4>
		<hr>
		<span>TANGGAL PEMESAN</span>
		<h4><?php echo $row['tgl_pembeli'] ?></h4>
		<hr>
		<span>NAMA PEMESAN</span>
		<h4><?php echo $row['nama'] ?></h4>
		<hr>
		<span>JUMLAH PEMESAN</span>
		<h4><?php echo $row['jumlah'] ?></h4>
		<hr>
		<a target="_BLANK" href="cetakdetailpesanan.php?nama=<?php echo $row['nama_pembeli'] ?>" class="btn btn-primary" >CETAK</a>
	</div>
</div>