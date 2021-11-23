<?= $this->extend('layout/template') ?>
<?= $this->section('isi') ?>

<div class="container">
  <div class="row">
    <div class="col">
    <h1>Tambah Data</h1>
    <form>
    <div class="mb-3">
    <label for="exampleInputNama1" class="form-label">Nama</label>
    <input type="Nama" class="form-control" id="exampleInputNama1">
  </div>
  <div class="mb-3">
    <label for="exampleInputGelar1" class="form-label">Gelar</label>
    <input type="Gelar" class="form-control" id="exampleInputGelar1" aria-describedby="emailHelp">
    </div>  
  <div class="mb-3">
    <label for="exampleInputFoto1" class="form-label">Foto</label>
    <input type="Foto" class="form-control" id="exampleInputFoto1" aria-describedby="emailHelp">
    </div>  
   
  <button type="submit" class="btn btn-primary" mt-3>Tambah Data</button>
</form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>