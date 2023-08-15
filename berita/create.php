<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Berita Acara</h1>
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
                <td>Tanggal</td>
                <td><input class="form-control" type="date" name="tanggal"></td>
              </tr>
              <tr>
                <td>Laboratorium</td>
                <td>
                  <select class="form-control" name="lokasi" id="lokasi" required>
                    <option value="Lab 1">Lab 1</option>
                    <option value="Lab 2">Lab 2</option>
                    <option value="Lab 3">Lab 3</option>
                    <option value="Lab 4">Lab 4</option>
                    <option value="Lab 5">Lab 5</option>
                    <option value="Lab 6">Lab 6</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td><input class="form-control" type="text" name="kelas"></td>
              </tr>
              <tr>
                <td>Guru</td>
                <td><input class="form-control" type="text" name="guru"></td>
              </tr>
              <tr>
                <td>Mata Pelajaran</td>
                <td><input class="form-control" type="text" name="mapel"></td>
              </tr>
              <tr>
                <td>PC Terpakai</td>
                <td><input class="form-control" type="number" name="terpakai"></td>
              </tr>
              <tr>
                <td>PC Tidak Terpakai
                <td><input class="form-control" type="number" name="tdk_terpakai"></td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td><input class="form-control" type="text" name="keterangan"></td>
              </tr>



              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
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