<?php 
include('../database.php');
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM produk WHERE id_prdk = '$id' ");
$row=mysqli_fetch_assoc($query);
if (isset($_POST['save'])) {
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];
		$stok = $_POST['stok'];
		$jenis = $_POST['jenis'];
		$namafoto = $_FILES['foto']['name'];
		$source = $_FILES['foto']['tmp_name'];
		$lokasi='./pict/';	
		if ($namafoto == '') {
		$query = mysqli_query($db,"UPDATE produk SET nama='$nama',harga='$harga',deskripsi='$deskripsi',stok='$stok',jenis='$jenis' WHERE id_prdk='$id' ");
			if ($query) {
				echo "<script>
					alert('Produk Berhasil Diperbarui')
					document.location.href='index.php?halaman=produk'
					</script> ";
			} else {
				echo "<script>
					alert('Produk Gagal Diperbarui')
					</script> ";
			}
		} else {
		move_uploaded_file($source, $lokasi.$namafoto);	
		$query = mysqli_query($db,"UPDATE produk SET nama='$nama',harga='$harga',foto='$namafoto',deskripsi='$des',jenis='$jenis' WHERE id_prdk='$id' ");
			if ($query) {
				echo "<script>
					alert('Produk Berhasil Diperbarui')
					document.location.href='index.php?halaman=produk'
					</script> ";
			} else {
				echo "<script>
					alert('Produk Gagal Diperbarui')
					</script> ";
			}
		}
}
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<center><h2>EDIT PRODUK</h2></center>
		<center>
 		<form action="" method="post" enctype="multipart/form-data">
 			<div class="input-gruop">
 				<span>Masukkan Nama Hijab</span>
 				<input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Harga Hijab</span>
 				<input type="text" name="harga" class="form-control" value="<?php echo $row['harga'] ?>">
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Foto Hijab</span><br>
 				<img style="width: 100px;height: 100px" src="img/<?php echo $row['foto'] ?>">
 				<input type="file" name="foto" class="form-control">
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Deskripsi Hijab</span>
 				<textarea name="deskripsi" class="form-control"><?php echo $row['deskripsi'] ?></textarea>
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Stok Barang</span>
 				<input type="text" name="stok" class="form-control"
 				value="<?php echo $row['stok']?>">
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Jenis Hijab</span>
 				<select name="jenis" class="form-control">
 					<option><?php echo $row['jenis'] ?></option>
 					<option>Hijab Beria</option>
 					<option>Hijab Amira</option>
 					<option>Hijab Siera</option>
 				</select>
 			</div>
 			<br>
 			<input type="submit" name="save" value="Save" class="btn btn-info">
 		</form>
 		</center>
	</div>
</div>