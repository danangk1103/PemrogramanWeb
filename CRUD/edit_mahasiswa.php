<?php
require_once("config.php");

if (isset($_GET['id_mahasiswa'])) {
    $id_mahasiswa = $_GET['id_mahasiswa'];


    if (isset($_POST['update'])) {

        $id_mhs = $_POST['id_mahasiswa'];
        $nama = $_POST['nama'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];

        $result = mysqli_query($koneksi, "UPDATE mahasiswa SET id_mahasiswa='$id_mhs', nama='$nama', email='$email',
    mobile='$mobile' WHERE id_mahasiswa=$id_mahasiswa ");

        if ($result) {
            header("location:mahasiswa.php");
        }
    }

    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa");

    while ($item = mysqli_fetch_array($result)) {
        $id_mahasiswa = $item['id_mahasiswa'];
        $nama = $item['nama'];
        $email = $item['email'];
        $mobile = $item['mobile'];
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
    <title>Edit Mahasiswa</title>
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
                        <a class="nav-link active" href="#">Mahasiswa</a>
                        <a class="nav-link" href="dosen.php">Dosen</a>
                        <a class="nav-link" href="kelas.php">Kelas</a>
                        <a class="nav-link" href="jadwal.php">Jadwal</a>
                    </div>
                </div>
            </div>
        </nav>
        <br>
        <a class="btn btn-primary" href="mahasiswa.php" role="button">Kembali</a>
        <br><br>
        <form action="edit_mahasiswa.php?id_mahasiswa=<?= $id_mahasiswa ?>" method="POST">
            <table width="50%" class="table table-bordered">
                <tr>
                    <td>ID Mahasiswa</td>
                    <td><input type="number" name="id_mahasiswa" value="<?= $id_mahasiswa ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $nama ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?= $email ?>"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="number" name="mobile" value="<?= $mobile ?>"></td>
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
                <th>ID Mahasiswa</th>
                <th>Nama</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><?= $id_mahasiswa; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $mobile; ?></td>
                <td><?= $email; ?></td>
            </tr>
        </table>
</body>

</html>