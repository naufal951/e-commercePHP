<?php 
include '../database.php';
$id=$_GET['id'];
$query=mysqli_query($db,"DELETE FROM admin WHERE id_admin='$id'");
if ($query) {
	echo "<script>
				alert('ADMIN BERHASIL DIHAPUS')
				document.location.href='index.php?halaman=admin'
		</script> ";
} else {
	echo "<script>
				alert('ADMIN GAGAL BERHASIL')
				document.location.href='index.php?halaman=admin'
		</script> ";
}
 ?>
