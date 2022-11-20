<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstra
p.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Dosen</title>
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

        <form action="add_dosen.php" method="POST">
            <table width="50%">
                <tr>
                    <td>ID Dosen</td>
                    <td><input type="number" name="id_dosen" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td><input type="number" name="nip" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" name="submit" value="Add data"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $varidmhs = $_POST['id_dosen'];
            $varnama = $_POST['nama'];
            $varemail = $_POST['email'];
            $varnip = $_POST['nip'];

            include_once("config.php");

            $result = mysqli_query($koneksi, "INSERT INTO dosen(id_dosen,nama,nip,email) VALUES
            ('$varidmhs','$varnama','$varnip','$varemail')");

            if ($result) {
                echo "Dosen berhasil ditambahkan! <a href='dosen.php'>View Dosen</a>";
            }
        }
        ?>
</body>

</html>