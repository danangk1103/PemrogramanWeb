<?php
require_once("config.php");

if (isset($_GET['id_dosen'])) {
    $id_mahasiswa = $_GET['id_dosen'];


    if (isset($_POST['update'])) {

        $id_dsn = $_POST['id_dosen'];
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $email = $_POST['email'];

        $result = mysqli_query($koneksi, "UPDATE dosen SET id_dosen='$id_dsn', nama='$nama', email='$email',
    nip='$nip' WHERE id_dosen=$id_dosen ");

        if ($result) {
            header("location:dosen.php");
        }
    }

    $result = mysqli_query($koneksi, "SELECT * FROM dosen WHERE id_dosen=$id_dosen");

    while ($item = mysqli_fetch_array($result)) {
        $id_dosen = $item['id_dosen'];
        $nama = $item['nama'];
        $email = $item['email'];
        $nip = $item['nip'];
    }
}
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
    <title>Edit Dosen</title>
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
                        <a class="nav-link active" href="#">Dosen</a>
                        <a class="nav-link" href="kelas.php">Kelas</a>
                        <a class="nav-link" href="jadwal.php">Jadwal</a>
                    </div>
                </div>
            </div>
        </nav>
        <br>
        <a class="btn btn-primary" href="dosen.php" role="button">Kembali</a>
        <br><br>
        <form action="edit.php?id_dosen=<?= $id_dosen ?>" method="POST">
            <table width="50%" class="table table-bordered">
                <tr>
                    <td>ID Dosen</td>
                    <td><input type="number" name="id_dosen" value="<?= $id_dosen ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $nama ?>"></td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td><input type="number" name="mobile" value="<?= $nip ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?= $email ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" name="update" value="Update data"></td>
                </tr>
            </table>
        </form>
        <br><br>
        <table width="100%" class="table table-bordered">
            <tr>
                <th>ID Dosen</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><?= $id_dosen; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $nip; ?></td>
                <td><?= $email; ?></td>
            </tr>
        </table>
</body>

</html>