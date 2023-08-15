<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_berita = $_GET['id_berita'];
$query = mysqli_query($connection, "SELECT * FROM berita_acara WHERE id_berita='$id_berita'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Berita Acara</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="id_berita" value="<?= $row['id_berita'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Tanggal</td>
                  <td><input class="form-control" type="date" name="tanggal" required value="<?= $row['tanggal'] ?>"></td>
                </tr>
                <tr>
                  <td>Lokasi</td>
                  <td><input class="form-control" type="text" name="lokasi" required value="<?= $row['lokasi'] ?>"></td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td><input class="form-control" type="text" name="kelas" required value="<?= $row['kelas'] ?>"></td>
                </tr>
                <tr>
                  <td>Guru</td>
                  <td><input class="form-control" type="text" name="guru" required value="<?= $row['guru'] ?>"></td>
                </tr>
                <tr>
                  <td>Mata Pelajaran</td>
                  <td><input class="form-control" type="text" name="mapel" value="<?=$row['mapel']?>"></td>
                </tr>
                <tr>
                  <td>PC Terpakai</td>
                  <td><input class="form-control" type="number" name="terpakai" required value="<?= $row['terpakai'] ?>"></td>
                </tr>
                <tr>
                  <td>PC Tidak Terpakai</td>
                  <td><input class="form-control" type="number" name="tdk_terpakai" required value="<?= $row['tdk_terpakai'] ?>"></td>
                </tr>
                <tr>
                  <td>Keterangan</td>
                  <td><input class="form-control" type="text" name="keterangan" required value="<?= $row['keterangan'] ?>"></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>