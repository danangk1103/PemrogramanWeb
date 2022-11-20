<?php
require_once("config.php");
$id_mahasiswa = $_GET["id_mahasiswa"];
$result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa");
if ($result) {
    header("location:mahasiswa.php");
}
?>