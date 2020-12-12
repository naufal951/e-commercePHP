<?php 
include('../database.php');
$id=$_GET['id'];
$query = mysqli_query($db,"DELETE FROM produk WHERE id_prdk='$id'");
if ($query) {
	echo "<script>
	alert('PRODUK BERHASIL DIHAPUS')
	document.location.href='index.php?halaman=produk'
	</script>
	";
} else {
	echo "<script>
	alert('PRODUK GAGAL DIHAPUS')
	document.location.href='index.php?halaman=produk'
	</script>
	";

}	
 ?>
