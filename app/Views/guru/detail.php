<?= $this->extend('layout/template')?>
<?= $this->section('isi')?>
<div class="container">
    <div class="row">
       <div class="col">
           <h2 class="mt-2">Detail Guru</h2>
       <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?=$guru['foto'];?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$guru['nama'];?></h5>
        <p class="card-text"><?=$guru['gelar'];?></p>
        <p class="card-text"><small class="text-muted"></small></p>
        <a href="" class="btn btn-warning"> Edit </a>
        <a href="" class="btn btn-danger"> Delete </a> <br><br>
        <a href="/guru" > Kembali ke Data Guru </a>
      </div>
    </div>
  </div>
</div>
       </div>
    </div>
</div>
<?= $this->endSection();?>