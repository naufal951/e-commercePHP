<?php 
session_start();
$id=$_GET['id'];
unset($_SESSION['keranjang'][$id]);
echo "<script>
	alert('PRODUK DIHAPUS DARI KERANJANG')
	document.location.href='keranjang.php'
	</script>
";
 ?>