<?php
require_once('config.php');
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
</head>
<body>
	<a href="add.php">Add mahasiswa</a>
	<table width="100%" border="1">
		<tr>
			<th>Nama</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
		<?php
		while ($item = mysqli_fetch_array($result)) {
		?>
			<tr>
				<td><?=$item['nama'];?></td>
				<td><?=$item['mobile'];?></td>
				<td><?=$item['email'];?></td>
				<td>
					<a href="edit.php?id_mahasiswa=<?=$item['id_mahasiswa'];?>">Edit</a>
					<a href="delete.php?id_mahasiswa=<?=$item['id_mahasiswa'];?>" onclick="return
					confirm('Apakah Anda yakin akan menghapus data?')">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>

