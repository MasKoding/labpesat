<?php
session_start();
require_once '../helper/connection.php';

$kd_mt = $_GET['kd_mt'];
$kd_barang = $_GET['kode_barang'];

$query = mysqli_query($connection, "UPDATE maintenance, tabel_barang SET 
maintenance.tanggal_selesai = curdate() , 
maintenance.status = 'Rusak',
maintenance.hasil = 'Rusak' , 
tabel_barang.status = 'Rusak'
WHERE kd_maintenance = '$kd_mt'");
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
