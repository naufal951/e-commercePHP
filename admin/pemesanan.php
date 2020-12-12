<?php 
	include('../database.php');
	$query=mysqli_query($db,"SELECT * FROM pembelian JOIN produk ON pembelian.id_prdk=produk.id_prdk ORDER BY id_pembelian DESC");
	$no=1;
	if (isset($_POST['cari'])) {
		$cari = $_POST['cari'];
		$query=mysqli_query($db,"SELECT * FROM pembelian JOIN produk ON pembelian.id_prdk=produk.id_prdk WHERE nama_pembeli LIKE '%$cari%' ");
	}
	
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2><center>PEMBELIAN</center></h2>
		<br>
			<div class="row">
				<div class="col-md-7">
					<form action="" method="post">
						<div class="input-group">
							<input type="text" name="cari" placeholder="Nama Pembeli" class="form-control">
						</div>
					</form>
				</div>
				<form action="cetakpesan.php" method="post">
				<div class="col-md-2">
					<div class="input-group">
						<select name="bulan" class="form-control">
							<option value="0">Bulan</option>
							<option value="1">Januari</option>
							<option value="2">Februari</option>
							<option value="3">Maret</option>
							<option value="4">April</option>
							<option value="5">Mei</option>
							<option value="6">Juni</option>
							<option value="7">Juli</option>
							<option value="8">Agustus</option>
							<option value="9">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>
					</div>
				</div>

				</form>
				<div class="col-md-2">
					<a target="_BLANK" href="eksportpemesanan.php" class="btn btn-primary">EKSPORT</a>
				</div>
			</div>
			<br>
			<table class="table">
				<tr>
					<th>NO</th>
					<th>NAMA PEMBELI</th>
					<th>PRODUK</th>
					<th>TANGGAL</th>
					<th>STATUS</th>
					<th>PHONE</th>
					<th>DETAIL</th>
					<th>PENGIRIMAN</th>
				</tr>
				<?php while ($row=mysqli_fetch_assoc($query)):?>
				<tr>

					<td><?php echo $no++ ?></td>
					<td><?php echo $row['nama_pembeli'] ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['tgl_pembeli'] ?></td>
					<td><?php echo $row['status'] ?></td>
					<td><?php echo $row['no_telp'] ?></td>
					<td> <a class="btn btn-info" href="index.php?halaman=detailpemesanan&id=<?php echo $row ['id_pembelian'] ?>">CETAK</a></td>
					<td><a class="btn btn-info" href="index.php?halaman=pengiriman&id=<?php echo $row['id_pembelian'] ?>">KONFIRMASI</a></td>
				</tr>
			<?php endwhile ?>
			</table>
		</div>
	</div>