<?php
session_start();
require_once '../helper/connection.php';

$jenis_barang = $_POST['jenis_barang'];
$kd_barang = $_POST['kd_barang'];
$merk_barang = $_POST['merk_barang'];
$spesifikasi = $_POST['spesifikasi'];
$status =  $_POST['status'];
$lokasi = $_POST['lokasi'];

$query = mysqli_query($connection, "insert into tabel_barang(jenis_barang, kd_barang, merk_barang, spesifikasi, status, lokasi) 
value('$jenis_barang', '$kd_barang', '$merk_barang', '$spesifikasi','$status','$lokasi')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah barang'
  ];
  header('Location: ./index.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }
