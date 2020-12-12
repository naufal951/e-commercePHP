<?php 
include('../database.php');
$query = mysqli_query($db,"SELECT * FROM produk ORDER BY id_prdk DESC");
$no=1;
if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
	$query = mysqli_query($db,"SELECT * FROM produk WHERE nama like '%$cari%' ");
}


 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>HALAMAN PRODUK</h2>
		<div class="row">
			<div class="col-md-7">
				<a href="index.php?halaman=tambahproduk" class="btn btn-info">TAMBAH PRODUK</a>
			</div>
			<div class="col-md-2">
				<a href="export.php" class="btn btn-info">EKSPORT</a>
			</div>
			<div class="col-md-3">
				<form action="" method="post">
					<div class="input-group">
						<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Jilbab">
					</div>
				</form>
			</div>
		</div>
		
		<hr>
		<table class="table">
			<tr style="background-color: silver">
				<th>NO</th>
				<th>NAMA</th>
				<th>HARGA</th>
				<th>DESKRIPSI</th>
				<th>FOTO</th>
				<th>STOK</th>
				<th>EDIT/DELETE</th>
			</tr>
			<?php while ($row=mysqli_fetch_assoc($query)):?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td>Rp.<?php echo number_format($row['harga']) ?>,-</td>
				<td><?php echo $row['deskripsi']?></td>
				<td><img style="width: 100px;height: 50px;" src="pict/<?php echo $row['foto'] ?>"></td>
				<td><?php echo $row['stok']?></td>
				<td>
					<a href="index.php?halaman=editproduk&id=<?php echo $row['id_prdk'] ?>" class="btn btn-info">EDIT</a>
					<a href="hapusproduk.php?id=<?php echo $row['id_prdk'] ?>" class="btn btn-info">DELETE</a>
				</td>
			</tr>
		<?php endwhile; ?>
		</table>
	</div>
</div>