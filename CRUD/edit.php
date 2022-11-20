<?php
require_once("config.php");

if (isset($_GET['id_mahasiswa'])) {
    $id_mahasiswa = $_GET['id_mahasiswa'];


    if (isset($_POST['update'])) {

        $nama = $_POST['nama'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];

        $result = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', email='$email',
    mobile='$mobile' WHERE id_mahasiswa=$id_mahasiswa ");

        if ($result) {
            header("location:index.php");
        }
    }

    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa");

    while ($item = mysqli_fetch_array($result)) {
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
    <title>Edit Mahasiswa</title>
</head>

<body>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="edit.php?id_mahasiswa=<?= $id_mahasiswa ?>" method="POST">
        <table width="50%">
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
                <input type="submit" name="update" value="Update data">
            </tr>
        </table>
    </form>
    <br><br>
    <table width="100%" border="1">
        <tr>
            <th>Nama</th>
            <th>Mobile</th>
            <th>Email</th>
        </tr>
        <tr>
            <td><?= $nama; ?></td>
            <td><?= $email; ?></td>
            <td><?= $mobile; ?></td>
        </tr>
    </table>
</body>

</html>