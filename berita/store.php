<?php
session_start();
require_once '../helper/connection.php';

$id_berita = $_POST['id_berita'];
$tanggal = $_POST['tanggal'];
$lokasi = $_POST['lokasi'];
$kelas = $_POST['kelas'];
$guru = $_POST['guru'];
$mapel = $_POST['mapel'];
$terpakai = $_POST['terpakai'];
$tdk_terpakai = $_POST['tdk_terpakai'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($connection, "insert into berita_acara (tanggal, lokasi, kelas, guru, mapel, terpakai, tdk_terpakai, keterangan) value (
  '$tanggal','$lokasi', '$kelas', '$guru', '$mapel', '$terpakai', '$tdk_terpakai', '$keterangan')");

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
