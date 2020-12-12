<?php 
	include('../database.php');
	$id=$_GET['id'];
	$query=mysqli_query($db,"SELECT * FROM pembelian JOIN produk ON pembelian.id_prdk=produk.id_prdk WHERE id_pembelian='$id'");
	$row=mysqli_fetch_assoc($query);

	if (isset($_POST['simpan'])) {
		$tanggal = date('d/m/y');
		$kirim = $_POST['pengiriman'];
		$query=mysqli_query($db,"UPDATE pembelian SET status='$kirim' WHERE id_pembelian='$id' ");
		if ($query) {
		echo "<script>
			alert('UPDATE Barhasil Disimpan')
			document.location.href='index.php?halaman=pemesanan'
			</script> ";
		} else {
			echo "<script>
				alert('UPDATE Gagal Ditambah')
				</script> ";
	}
	}
 ?>
<div id="page-wrapper">
	<div id="page-inner">
	<center>	<h2>Pengiriman</h2></center>
		<form action="" method="post">
			<center>
			<div class="input-gruop">
 				<span>NAMA PEMESAN</span>
 				<input type="text" name="nama" class="form-control" required="" readonly="" style="width: 400px;" value="<?php echo $row['nama_pembeli'] ?>">
 			</div>
 			</center>
 			<center>
 			<div class="input-gruop">
 				<span>ALAMAT PEMESAN</span>
 				<input type="text" name="nama" class="form-control" required="" readonly="" style="width: 400px;" value="<?php echo $row['alamat'] ?>">
 			</div>
 			</center>
 			<center>
 			<div class="input-gruop">
 				<span>NOMOR TELPON PEMESAN</span>
 				<input type="text" name="nama" class="form-control" required="" readonly="" style="width: 400px;" value="<?php echo $row['no_telp'] ?>">
 			</div>
 			</center>
 			<center>
 			<div class="input-gruop">
 				<span>TANGGAL PEMESAN</span>
 				<input type="date" name="nama" class="form-control" required="" readonly="" style="width: 400px;" value="<?php echo $row['tgl_pembeli'] ?>">
 			</div>
 			</center>
 			<center>
 			<div class="input-gruop">
 				<span>NAMA BARANG</span>
 				<input type="text" name="nama" class="form-control" required="" readonly="" style="width: 400px;" value="<?php echo $row['nama'] ?>">
 			</div>
 			</center>
 			<center>
 			<div class="input-gruop">
 				<span>JUMLAH PEMESAN</span>
 				<input type="text" name="nama" class="form-control" required="" readonly="" style="width: 400px;" value="<?php echo $row['jumlah'] ?>">
 			</div>
 			</center>
 			<center>
 			<div class="input-gruop">
 				<span>PENGIRIMANAN</span>
 				<select class="form-control" style="width: 400px;" name="pengiriman">
 					<option>STATUS PENGIRIMAN</option>
 					<option>TERKIRIM</option>
 					<option>BELUM TERKIRIM</option>
 				</select>
 			</div>
 			</center>
 			<br><center>
 			<input type="submit" name="simpan" class="btn btn-primary"></center>
		</form>

	</div>
</div>