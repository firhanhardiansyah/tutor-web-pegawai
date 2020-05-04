<?php
session_start();
ob_start();

include "library/config.php";

if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
  echo "<p class='center'>Anda Telah Logout</p>";
  echo '<meta http-equiv="refresh" content="0; url=login.php">';
} else {
  define('INDEX', true);

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/open-iconic/font/css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="assets/plugin/DataTables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugin/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/plugin/summernote/dist/summernote-bs4.css">
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
      <a href="#" class="navbar-brand">Aplikasi Manajemen Pegawai</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <nav class="collapse navbar-collapse" id="sidebar">
        <ul class="navbar-nav d-sm-none">
          <li class="nav-item">
            <a href="?hal=dashboard" class="nav-link text-white">
              <i class="oi oi-dashboard"></i> Dashboard</a>
          </li>
        </ul>
        <ul class="navbar-nav d-sm-none">
          <li class="nav-item">
            <a href="?hal=pegawai" class="nav-link text-white">
              <i class="oi oi-person"></i> Data Pegawai</a>
          </li>
        </ul>
        <ul class="navbar-nav d-sm-none">
          <li class="nav-item">
            <a href="?hal=jabatan" class="nav-link text-white">
              <i class="oi oi-sort-descending"></i> Data Jabatan</a>
          </li>
        </ul>
        <ul class="navbar-nav d-sm-none">
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-white">
              <i class="oi oi-account-logout"></i> Keluar</a>
          </li>
        </ul>
      </nav>
    </nav>
    <!-- End Navbar -->

    <!-- SideBar & Content -->
    <div class="container-fluid h-100">
      <div class="row h-100">
        <!-- SideBar -->
        <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark">
              <a href="?hal=dashboard" class="nav-link text-white">
                <i class="oi oi-dashboard"></i> Dashboard</a>
            </li>
            <li class="list-group-item bg-dark">
              <a href="?hal=pegawai" class="nav-link text-white">
                <i class="oi oi-person"></i> Data Pegawai</a>
            </li>
            <li class="list-group-item bg-dark">
              <a href="?hal=jabatan" class="nav-link text-white">
                <i class="oi oi-sort-descending"></i> Data Jabatan</a>
            </li>
            <li class="list-group-item bg-dark">
              <a href="logout.php" class="nav-link text-white">
                <i class="oi oi-account-logout"></i> Keluar</a>
            </li>
          </ul>
        </nav>
        <!-- End SideBar -->

        <!-- Content -->
        <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
          <section>
            <?php include 'konten.php'; ?>
          </section>
        </div>
        <!-- End Content -->

      </div>
    </div>
    <!-- End SideBar & Content -->

    <div class="bg-light fixed-bottom">
      <p class="m-2 text-center text-muted">
        Copyright &copy; Firhan Hardiansyah
      </p>
    </div>


    <script src="assets/js/jquery_3_4_1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/plugin/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugin/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugin/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugin/summernote/dist/summernote-bs4.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
        $('#tanggal').datepicker();
        $('#keterangan').summernote();
      });
    </script>
  </body>

  </html>

<?php
}
?>