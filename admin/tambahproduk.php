<?php 
include('../database.php');
	if (isset($_POST['save'])) {
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];
		$stok = $_POST['stok'];
		$jenis = $_POST['jenis'];
		$foto = $_FILES['foto']['name'];
		$source = $_FILES['foto']['tmp_name'];
		$lokasi='./pict/';
		move_uploaded_file($source, $lokasi.$foto);
		$query = mysqli_query($db,"INSERT INTO produk VALUES (NULL,'$nama','$harga','$foto','$deskripsi','$stok','$jenis')");
		if ($query) {
		echo "<script>
			alert('Produk Barhasil Disimpan')
			document.location.href='index.php?halaman=produk'
			</script> ";
	} else {
		echo "<script>
			alert('Produk Gagal Ditambah')
			</script> ";
	}
	}
 ?>
 <div id="page-wrapper">
 	<div id="page-inner">
 		<h2>TAMBAH PRODUK</h2>
 		<br>
 		<center>
 		<form action="" method="post" enctype="multipart/form-data">
 			<div class="input-gruop">
 				<span>Masukan Nama Hijab</span>
 				<input type="text" name="nama" required="" class="form-control"style="width: 350px;">
 			</div>
 			<div class="input-gruop">
 				<span>Masukan Harga Hijab</span>
 				<input type="text" name="harga" required="" class="form-control" style="width: 350px;">
 			</div>
 			<div class="input-gruop">
 				<span>Masukan Foto Hijab</span>
 				<input type="file" name="foto" required="" class="form-control" style="width: 350px;">
 			</div>
 			<div class="input-gruop">
 				<span>Masukan Deskripsi Hijab</span>
 				<textarea name="deskripsi" required="" class="form-control" style="width: 350px;"></textarea>
 			</div>
 			<div class="input-gruop">
 				<span>Masukkan Stok Barang</span>
 				<input type="text" name="stok" required="" class="form-control"
 				style="width: 350px;">
 			</div>
 			<div class="input-gruop">
 				<span>Masukan Jenis Hijab</span>
 				<select name="jenis" required="" class="form-control" style="width: 350px;">
 					<option>Pilih Jenis</option>
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