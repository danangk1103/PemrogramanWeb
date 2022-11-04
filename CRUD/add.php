<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mahasiswa</title>
</head>
<body>
    <a href="index.php">Kembali</a>

    <form action="add.php" method="POST">
        <table width="50%">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>  
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="number" name="mobile"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add data"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $varnama = $_POST['nama'];
        $varemail = $_POST['email'];
        $varmobile = $_POST['mobile'];

        include_once("config.php");

        $result = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama,email,mobile) VALUES
        ('$varnama','$varemail','$varmobile')");

        if ($result) {
            echo "Mahasiswa berhasil ditambahkan! <a href='index.php'>View Mahasiswa</a>";
        }
    }
    ?>
</body>
</html>