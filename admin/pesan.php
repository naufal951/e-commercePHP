<?php 
include('../database.php');
$query=mysqli_query($db,"SELECT * FROM mail");
$no=1;
 ?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>PESAN</h2>
	<br>
	<table class="table">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>SUBJEK</th>
			<th>PESAN</th>
			<th>AKSI</th>
		</tr>
		<?php while ($row=mysqli_fetch_assoc($query)):?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['subjek'] ?></td>
			<td><?php echo $row['pesan'] ?></td>
			<td>
				<a href="index.php?halaman=detailpesan&id=<?php echo $row['id'] ?>" class="btn btn-default">LIHAT</a>
				<a href="index.php?halaman=hapuspesan&id=<?php echo $row['id'] ?>" class="btn btn-danger">HAPUS</a>
			</td>
		</tr>
	<?php endwhile ?>
	</table>
	</div>
</div>