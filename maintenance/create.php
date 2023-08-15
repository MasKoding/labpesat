<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Maintenance</h1>
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
              <td>Kode Barang</td>
              <td>
                <select class="form-control kd_barang" name="kd_barang">
                    <option value="0">--Pilih Barang--</option>
                    <?php
                    $sql = mysqli_query($connection,"SELECT * FROM tabel_barang");
                    while($row=mysqli_fetch_array($sql))
                    {
                    echo '<option value="'.$row['kd_barang'].'">'.$row['kd_barang'].'</option>';
                    } ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Tanggal Rusak</td>
                <td><input class="form-control" type="date" name="tanggal_rusak"></td>
              </tr>
              <tr>
                <td>Kerusakan</td>
                <td><input class="form-control" type="text" name="kerusakan"></td>
              </tr>
              <td>Teknisi</td>
                <td>
                <select class="form-control" name="teknisi" id="teknisi" required>
                    <option value="">--Pilih Teknisi--</option>
                    <option value="Abdul Fikri">Abdul Fikri</option>
                    <option value="Fajar Al Fathin">Fajar Al Fathin</option>
                    <option value="Meidiyanto Yasin">Meidiyanto Yasin</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Tindakan</td>
                <td><input class="form-control" type="text" name="tindakan"></td>
              </tr>
              <tr>
                <td>Tanggal Selesai</td>
                <td><input class="form-control" type="date" name="tanggal_selesai"></td>
              </tr>
              <tr>
                <td>Hasil</td>
                <td><input class="form-control" type="text" name="hasil"></td>
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