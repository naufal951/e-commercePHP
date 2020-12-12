<?php
include('../database.php');
$query=mysqli_query($db,"SELECT * FROM admin");
$no=1;
?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>HALAMAN ADMIN</h2>
		<a href="index.php?halaman=tambahadmin" class="btn btn-primary">TAMBAH ADMIN</a>
		<hr>
		<table class="table">
			<tr>
				<th>NO</th>
				<th>USERNAME</th>
				<th>DELETE</th>
			</tr>
			<?php while ($row=mysqli_fetch_assoc($query)):?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['username'] ?></td>
				<td>
					<a href="hapusadmin.php?id=<?php echo $row['id_admin'] ?>" class="btn btn-primary">HAPUS</a>
				</td>
			</tr>
		<?php endwhile ?>
		</table>
	</div>
</div>