<?php
if (!defined('INDEX')) die("");
?>

<h1 class="mt-3">Tambah Data Pegawai</h1>
<hr>
<form class="mb-5" action="?hal=pegawai_insert" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-4">
      <div class="custom-file">
        <label for="foto" class="custom-file-label"></label>
        <input type="file" class="custom-file-input" id="foto" name="foto">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-8">
      <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
    </div>
  </div>
  
</form>