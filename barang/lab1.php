<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM tabel_barang WHERE lokasi = 'Lab 1'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Barang</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <a href="./index.php" class="btn btn-success">All</a>
      <a href="./lab1.php" class="btn btn-warning">Lab 1</a>
      <a href="./lab2.php" class="btn btn-success">Lab 2</a>
      <a href="./lab3.php" class="btn btn-success">Lab 3</a>
      <a href="./lab4.php" class="btn btn-success">Lab 4</a>
      <a href="./lab5.php" class="btn btn-success">Lab 5</a>
      <a href="./lab6.php" class="btn btn-success">Lab 6</a>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Jenis Barang</th>
                  <th>Merk Barang</th>
                  <th>Spesifikasi</th>
                  <th>Status</th>
                  <th>Lokasi</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['kd_barang'] ?></td>
                    <td><?= $data['jenis_barang'] ?></td>
                    <td><?= $data['merk_barang'] ?></td>
                    <td><?= $data['spesifikasi'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['lokasi']?></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?id_barang=<?= $data['id_barang'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?id_barang=<?= $data['id_barang'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
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