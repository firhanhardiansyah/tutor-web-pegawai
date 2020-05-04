<?php
if (!defined('INDEX')) die("");
?>

<div class="jumbotron mt-3">
  <h1>Selamat Datang</h1>
  <h1 class="display-4">
    Aplikasi Manajemen Pegawai
  </h1>
  <h4>
    Anda login sebagai administrator
  </h4>
</div>

<?php
$jml_pegawai = mysqli_num_rows(mysqli_query($con, "SELECT * FROM pegawai"));
$jml_jabatan = mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan"));
?>

<div class="row mb-3 pb-3">
  <div class="col-sm-6 mb-3">
    <ul class="list-group">
      <li class="list-group-item text-danger">
        <i class="oi oi-person display-3"></i>
        <span class="display-3 float-right">
          <?= $jml_pegawai ?>
        </span>
      </li>
      <li class="list-group-item bg-danger">
        <a href="?hal=pegawai" class="nav-link text-white">
          <h4>Data Pegawai</h4>
        </a>
      </li>
    </ul>
  </div>
  <div class="col-sm-6 mb-3">
    <ul class="list-group">
      <li class="list-group-item text-success">
        <i class="oi oi-sort-descending display-3"></i>
        <span class="display-3 float-right">
          <?= $jml_jabatan ?>
        </span>
      </li>
      <li class="list-group-item bg-success">
        <a href="?hal=jabatan" class="nav-link text-white">
          <h4>Data Jabatan</h4>
        </a>
      </li>
    </ul>
  </div>
</div>