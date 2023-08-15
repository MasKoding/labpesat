<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$pc = mysqli_query($connection, "SELECT COUNT(*) FROM tabel_barang where jenis_barang ='Personal Komputer'");
$maintenance = mysqli_query($connection, "SELECT COUNT(*) FROM maintenance where status =''");

$total_pc = mysqli_fetch_array($pc)[0];
$total_maintenance = mysqli_fetch_array($maintenance)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-desktop"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total PC</h4>
            </div>
            <div class="card-body">
              <?= $total_pc ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-tools"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Maintenance</h4>
            </div>
            <div class="card-body">
              <?= $total_maintenance ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>