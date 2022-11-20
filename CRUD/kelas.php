<?php
require_once('config.php');
$result = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY id_kelas DESC");
$result2 = mysqli_query($koneksi, "SELECT `dosen.nama` FROM `dosen`,`kelas` WHERE `kelas.id_dosen`=`dosen.id_dosen` DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstra
p.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Page Kelas</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">SIAKAD HOGWARTS</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
						<a class="nav-link" href="dosen.php">Dosen</a>
						<a class="nav-link active" href="#">Kelas</a>
						<a class="nav-link" href="jadwal.php">Jadwal</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<br>
	<a class="btn btn-primary" href="add_kelas.php" role="button">Add kelas</a>
	<br>
	<br>
	<table width="100%" class="table table-bordered">
		<tr>
			<th>Nama Makul</th>
			<th>Dosen Pengampu</th>
			<th>SKS</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
		<?php
		while ($item = mysqli_fetch_array($result)) {
		?>
			<tr>
				<td><?= $item['nama']; ?></td>
				<td>
					<a class="btn btn-primary" href="edit_mahasiswa.php?id_mahasiswa=<?= $item['id_mahasiswa'] ?>" role="button">Edit</a>
					<p>|</p>
					<a class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data?')" href="delete_mahasiswa.php?id_mahasiswa=<?= $item['id_mahasiswa'] ?>" role="button">Delete</a>
				</td>
			</tr>
		<?php } ?>
		<?php
		while ($item = mysqli_fetch_array($result2)) {
		?>
			<tr>
				<td><?= $item['nama']; ?></td>
				<td>
					<a class="btn btn-primary" href="edit_mahasiswa.php?id_mahasiswa=<?= $item['id_mahasiswa'] ?>" role="button">Edit</a>
					<p>|</p>
					<a class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data?')" href="delete_mahasiswa.php?id_mahasiswa=<?= $item['id_mahasiswa'] ?>" role="button">Delete</a>
				</td>
			</tr>
		<?php } ?>
        <?php
		while ($item = mysqli_fetch_array($result)) {
		?>
				<td><?= $item['sks']; ?></td>
				<td><?= $item['deskripsi']; ?></td>
				<td>
					<a class="btn btn-primary" href="edit_mahasiswa.php?id_mahasiswa=<?= $item['id_mahasiswa'] ?>" role="button">Edit</a>
					<p>|</p>
					<a class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data?')" href="delete_mahasiswa.php?id_mahasiswa=<?= $item['id_mahasiswa'] ?>" role="button">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>