<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_barang = $_GET['id_barang'];
$query = mysqli_query($connection, "SELECT * FROM tabel_barang WHERE id_barang='$id_barang'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Barang</h1>
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
              <table cellpadding="8" class="w-100">
                <tr>
                  <td><input class="form-control" type="number" name="id_barang" size="20" required value="<?= $row['id_barang'] ?>" hidden></td>
                </tr>

                <tr>
                <td>Jenis Barang</td>
                <td><input class="form-control" type="text" name="jenis_barang" required value="<?= $row['jenis_barang']?>"></td>
              </tr>

                <tr>
                  <td>Kode Barang</td>
                  <td><input class="form-control" type="text" name="kd_barang" size="20" required value="<?= $row['kd_barang'] ?>"></td>
                </tr>

                <tr>
                <td>Merk Barang</td>
                <td><input class="form-control" type="text" name="merk_barang" required value="<?= $row['merk_barang']?>"></td>
              </tr>

              <tr>
                <td>Spesifikasi</td>
                <td><input class="form-control" type="text" name="spesifikasi" required value="<?= $row['spesifikasi']?>"></td>
              </tr>

              <tr>
                <td>Lokasi</td>
                <td><input class="form-control" type="text" name="lokasi" required value="<?= $row['lokasi']?>"></td>
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