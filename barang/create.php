<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Barang</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Jenis Barang</td>
                <td><input class="form-control" type="text" name="jenis_barang" required></td>
              </tr>

              <tr>
                <td>Kode Barang</td>
                <td><input class="form-control" type="text" name="kd_barang" required></td>
              </tr>

              <tr>
                <td>Merk Barang</td>
                <td><input class="form-control" type="text" name="merk_barang"></td>
              </tr>

              <tr>
                <td>Spesifikasi</td>
                <td colspan="3"><textarea class="form-control" name="spesifikasi" id="spesifikasi"></textarea></td>
              </tr>

              <tr>
                <td>Status Barang</td>
                <td>
                  <select class="form-control" name="status" id="status" required>
                    <option value="Baik">Baik</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Rusak">Rusak</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Lokasi</td>
                <td><input class="form-control" type="text" name="lokasi"></td>
              </tr>
              
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>