<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT
m.kd_maintenance as kd_mt,
m.kd_barang as kode_barang,
m.kerusakan as kerusakan,
m.status as status,
m.tanggal_rusak as tanggal_rusak,
m.tanggal_selesai as tanggal_selesai,
m.teknisi as teknisi,
m.tindakan as tindakan,
m.hasil as hasil,
b.status as stats,
b.kd_barang
FROM (SELECT * FROM maintenance) m
INNER JOIN
(SELECT * FROM tabel_barang) b
ON m.kd_barang = b.kd_barang
");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Maintenance</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Kerusakan</th>
                  <th>Tanggal Rusak</th>
                  <th>Tindakan</th>
                  <th>Tanggal Selesai</th>
                  <th>Teknisi</th>
                  <th>Hasil</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr class="text-center">
                    <td><?= $no ?></td>
                    <td><?= $data['kode_barang'] ?></td>
                    <td><?= $data['kerusakan'] ?></td>
                    <td><?= $data['tanggal_rusak'] ?></td>
                    <td><?= $data['tindakan'] ?></td>
                    <td><?= $data['tanggal_selesai'] ?></td>
                    <td><?= $data['teknisi'] ?></td>
                    <td><?= $data ['hasil']?></td>

                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?kd_mt=<?= $data['kd_mt'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                    </td>
                  </tr>

                <?php
                  $no++;
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>