<?php 
include('../koneksi.php');
$id=$_GET['id'];
$query = mysqli_query($db,"DELETE FROM pesan WHERE id='$id'");
if ($query) {
	echo "<script>
	alert('Pesan Berhasil Dihapus')
	document.location.href='index.php?halaman=pesan'
	</script>
	";
} else {
	echo "<script>
	alert('Pesan Gagal Dihapus')
	document.location.href='index.php?halaman=pesan'
	</script>
	";

}	
 ?>