<?php
require_once 'koneksi.php';


if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $poli_id = $_POST['poli_id'];
    $sql = "SELECT * FROM poli WHERE poli_id = '$poli_id'";
    $query = $conn->query($sql);
    $data = $query->fetch_assoc();
    $nama_poli = $data['nama_poli'];
    $sql = "SELECT * FROM user_dokter WHERE nama_poli = '$nama_poli'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($data);
}else{
    header('Location: index.php');
}
?>