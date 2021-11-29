<?= $this->extend('layout/template') ?>
<?= $this->section('isi') ?>

<div class="container">
  <div class="row">
    <div class="col-8">
    <h1>Tambah Data</h1>
    <form action="/guru/save" method="post">
    <?= csrf_field();?>
    <div class="my-3">
    <label for="exampleInputNama1" class="form-label">Nama</label>
    <input autofocus type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputGelar1" class="form-label">Gelar</label>
    <input type="text" class="form-control" id="gelar" name="gelar" >
    </div>  
  <div class="mb-3">
    <label for="exampleInputFoto1" class="form-label">Foto</label>
    <input type="text" class="form-control" id="foto" name="foto">
    </div>  
   
  <button type="submit" class="btn btn-primary" mt-3>Tambah Data</button>
</form>
   
 
    </div>
  </div>
</div>
<?= $this->endSection(); ?>