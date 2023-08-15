<?php
session_start();
require_once '../helper/connection.php';

$kd_barang = $_POST['kd_barang'];
$tanggal_rusak = $_POST['tanggal_rusak'];
$teknisi = $_POST['teknisi'];
$tindakan = $_POST['tindakan'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$hasil = $_POST['hasil'];
$kerusakan = $_POST['kerusakan'];


$query = mysqli_query($connection, "insert into maintenance (kd_barang, tanggal_rusak, kerusakan, teknisi, tindakan, tanggal_selesai, hasil) value (
  '$kd_barang', '$tanggal_rusak', '$kerusakan', '$teknisi', '$tindakan', '$tanggal_selesai', '$hasil')");
$query1 = mysqli_query($connection, "UPDATE tabel_barang SET status = 'Maintenance' where kd_barang = '$kd_barang'");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
