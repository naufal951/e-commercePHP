<?php 
include '../database.php';
$query=mysqli_query($db,"SELECT * FROM pembelian JOIN produk ON pembelian.id_prdk=produk.id_prdk ORDER BY id_pembelian DESC");
$no=1;
$tgl=date("d-m-Y");
header("content-type:application/vnd-ms-exel");
header("content-disposition:attachment;filename=daftarpemesanan.xls");
 ?>
 <h2>Data Produk</h2>
 <p>Dicetak Pada :<?php echo $tgl ?></p>
 <table border="1px" cellpadding="10px" cellspacing="0px">
 	<tr style="text-align: center;background-color: grey">
					<th>NO</th>
					<th>NAMA PEMBELI</th>
					<th>PRODUK</th>
					<th>JUMLAH</th>
					<th>TANGGAL</th>
				</tr>
				<?php while ($row=mysqli_fetch_assoc($query)):?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $row['nama_pembeli'] ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['jumlah'] ?></td>
					<td><?php echo $row['tgl_pembeli'] ?></td>
				</tr>
			<?php endwhile ?>
			</table>