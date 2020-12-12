<?php 
include('../database.php');
$id=1;
$query=mysqli_query($db,"SELECT * FROM about WHERE id_about='$id' ");
$row=mysqli_fetch_assoc($query);

if (isset($_POST['save'])) {
	$tentang = $_POST['tentang'];
	$query1 = mysqli_query($db,"UPDATE about SET about='$tentang' WHERE id_about='$id' ");
		if ($query1) {
			echo "<script>
				alert('Tentang Perusahaan Berhasil Diperbarui')
				document.location.href='index.php?halaman=about'
				</script> ";
		} else {
			echo "<script>
				alert('Tentang Perusahaan Berhasil Diperbarui')
				</script> ";
		}
	}
	
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>TENTANG PERUSAHAAN</h2>
		<br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<div id="input-group">
				
				<textarea name="tentang" class="form-control" style="height: 300px;"><?php echo $row['about'] ?></textarea>
			</div>
			<br>
			<input type="submit" name="save" value="Save" class="btn btn-info">
		</form>
	</div>
</div>