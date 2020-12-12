<?php 
session_start();
include '../database.php';
$no=1;
$nama = $_GET['nama'];
$peng=mysqli_query($db,"SELECT * FROM pembelian JOIN produk ON pembelian.id_prdk=produk.id_prdk WHERE nama_pembeli = '$nama' ");
$query=mysqli_query($db,"SELECT * FROM kontak WHERE id_kontak=1");
$row=mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
	 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body onload="window.print()">
<center><h1>ELMA HIJAB</h1>
<p>ALAMAT : <?php echo $row['alamat_kontak'] ?></p>
<p>PHONE : <?php echo $row['no_telp']?> || EMAIL : <?php echo $row['email'] ?></p>
</center>
<hr>

<th>NAMA 	:	<?php echo $nama ?></th>
<br>
<table class="table">
	<tr>
		<th>NO</th>
		<th>NAMA PRODUK</th>
		<th>HARGA</th>
		<th>JUMLAH</th>
		<th>TOTAL</th>
	</tr>
	<?php $kes=0; ?>
	<?php while ($pec = mysqli_fetch_assoc($peng)):?>
	<?php $ttl=$pec['harga']*$pec['jumlah']; ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $pec['nama'] ?></td>
		<td><?php echo number_format($pec['harga']) ?></td>
		<td><?php echo $pec['jumlah'] ?></td>
		<td><?php echo number_format($ttl) ?></td>
	</tr>	
	<?php $kes+=$ttl ?>
	<?php endwhile ?>
</table>

<b>TOTAL PEMBAYARAN : <?php echo number_format($kes)?></b>
<hr>

</body>
</html>