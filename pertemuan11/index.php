<?php
include_once("koneksi.php");
$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);

switch ($request) {
    case 'GET':
        if (!empty($uri_segment[4])) {
            $id = intval($uri_segment[4]);
            get_karyawan($id);
        } else {
            get_karyawan();
        }
        break;

    default:
        header("HTTP/1.0 405 Method Tidak Terdaftar");
        break;
}

function get_karyawan()
{
    global $koneksi;
    $query = "SELECT * FROM tb_karyawan";
    $respon = array();
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $respon['data'][] = $row;
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}
?>