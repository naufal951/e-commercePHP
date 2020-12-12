<?php 
include '../database.php';
if (isset($_POST['save'])) {
	$nama=$_POST['username'];
	$pasword1=$_POST['ps'];
	$query=mysqli_query($db,"INSERT INTO admin VALUES(NULL, '$nama','$pasword1')");
	if ($query) {
		echo "<script>
					alert('REGISTRASI BERHASIL')
					document.location.href='index.php?halaman=admin'
			 </script>";
	} else {
		echo "<script>
					alert('REGISTRASI GAGAL')
			 </script>";
	}
}

 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>TAMBAH ADMIN</h2>
		<form action="" method="post">
			<div class="input-gruop">
 				<label>MASUKAN USERNAME</label>
 				<input type="text" name="username" class="form-control" style="width: 350px;" required="<?php echo $row['username'] ?>">
 			</div>
 			<div class="input-gruop">
 				<span>MASUKAN PASSWORD</span>
 				<input type="password" name="ps" class="form-control" style="width: 350px;" required="<?php echo $row['pass'] ?>">
 			</div>
 			<br>
 			<input type="submit" name="save" value="Save" class="btn btn-info">
		</form>
	</div>
</div>