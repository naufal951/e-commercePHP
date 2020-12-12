<?php 
include('../database.php');
$query=mysqli_query($db,"SELECT * FROM produk");
$no=1;
$tgl=date("d-m-Y");
header("content-type:application/vnd-ms-exel");
header("content-disposition:attachment;filename=daftarproduk.xls");
 ?>
 <h2>Data Produk</h2>
 <p>Dicetak Pada :<?php echo $tgl ?></p>
 <table border="1px" cellpadding="10px" cellspacing="0px">
 	<tr style="text-align: center;background-color: grey">
 		<th>NO</th>
 		<th>Nama_Produk</th>
 		<th>Harga</th>
 		<th>Deskripsi</th>
 		<th>Jenis</th>
 	</tr>
 	<?php while ($row=mysqli_fetch_assoc($query)):?>
 	<tr>
 		<td><?php echo $no++ ?></td>
 		<td><?php echo $row['nama'] ?></td>
 		<td><?php echo $row['harga'] ?></td>
 		<td><?php echo $row['deskripsi'] ?></td>
 		<td><?php echo $row['jenis'] ?></td>
 	</tr>
 <?php endwhile ?>
 </table>