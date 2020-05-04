<?php
if (!defined('INDEX')) die("");
?>

<h1 class="mt-2">Data Jabatan</h1>
<hr>

<a href="?hal=jabatan_tambah" class="btn btn-success">
  <i class="oi oi-plus"></i> Tambah
</a>

<div class="card card-body table-responsive mt-3">
  <table class="table table-striped table-hover table-bordered" id="myTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Jabatan</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC") or die(mysqli_error($con));
      $no = 1;
      foreach ($query as $data) :
      ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $data['nama_jabatan'] ?></td>
          <td>
            <a href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>" class="btn btn-sm btn-warning">
              <i class="oi oi-pencil"></i> Edit</a>
            <a href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>" class="btn btn-sm btn-danger">
              <i class="oi oi-trash"></i> Edit</a>
          </td>
        </tr>
      <?php
      endforeach;
      ?>
    </tbody>
  </table>
</div>