<?php 
	include('../database.php');
	$id=1;
	$query = mysqli_query($db,"SELECT * FROM kontak WHERE id_kontak='$id'");
	$row=mysqli_fetch_assoc($query);

	if (isset($_POST['save'])) {
		$alamat = $_POST['alamat'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$query = mysqli_query($db,"UPDATE kontak SET alamat_kontak='$alamat',no_telp='$phone',email='$email'");
		if ($query) {
			echo "<script>
			alert('Kontak Telah Diperbarui')
			document.location.href='index.php?halaman=kontak'
			</script>
			";
		} else {
			echo "<script>
			alert('Kontak Gagal Diperbarui')
			</script>
			";
		}
	}
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>HALAMAN KONTAK</h2>
		<br><br>
		<form action="" method="post">
			<div class="input-gruop">
 				<span>ALAMAT TOKO</span>
 				<input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat_kontak'] ?>">
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Nomor Telpon Toko</span>
 				<input type="text" name="phone" class="form-control" value="<?php echo $row['no_telp'] ?>">
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Email Toko</span>
 				<input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
 			</div>
 			<br>
 			<input type="submit" name="save" value="Save" class="btn btn-info">
		</form>
	</div>
</div>