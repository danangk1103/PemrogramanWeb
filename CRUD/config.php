<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "crud_db";

$koneksi = mysqli_connect($host, $username, $password, $db);

if(!$koneksi){
    die("Koneksi gagal ".mysqli_connect_error());
}

?>