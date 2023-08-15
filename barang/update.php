<?php
session_start();
require_once '../helper/connection.php';

$id_barang = $_POST['id_barang'];
$jenis_barang = $_POST['jenis_barang'];
$kd_barang = $_POST['kd_barang'];
$merk_barang = $_POST['merk_barang'];
$spesifikasi = $_POST['spesifikasi'];
$lokasi = $_POST['lokasi'];

$query = mysqli_query($connection, "UPDATE tabel_barang 
SET jenis_barang = '$jenis_barang',
kd_barang = '$kd_barang',
merk_barang = '$merk_barang',
spesifikasi = '$spesifikasi',
lokasi = '$lokasi'
WHERE id_barang = '$id_barang'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
