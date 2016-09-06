<a href="index.php?page=add">Tambah</a> |
<a href="index.php?page=welcome">About</a><br><br>
	<table border="1" cellspacing="0" width="30%" height="20%">
		<tr>
			<th>No</th>
			<th>Nama Buah</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no=1;
		while ($databuah=$data->fetch(PDO::FETCH_ASSOC)){
		 ?>

		<tr>
			<td> <?php echo $no++ ?></td>
			<td><?php echo $databuah['nama'];?></td>
			<td><?php echo $databuah['harga'];?></td>
			<td><?php echo $databuah['jumlah'];?></td>
			<td>
				<a href="index.php?edit=<?php echo $databuah['id'];?>" name="edit">Edit</a> |
				<a href="index.php?delete=<?php echo $databuah['id'];?>" name="delete">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
