<?php
session_start();
require_once '../helper/connection.php';

$id_berita = $_GET['id_berita'];

$result = mysqli_query($connection, "DELETE FROM berita_acara WHERE id_berita='$id_berita'");

if (mysqli_affected_rows($connection) > 0) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menghapus data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
