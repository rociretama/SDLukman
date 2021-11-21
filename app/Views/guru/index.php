<?= $this->extend('layout/template')?>
<?= $this->section('isi')?>

<div class="container">
    <div class="row">
        <div class="col">
     
        <h1 class="mt-2">Data Guru</h1>
        <a href="/guru/create" class="btn btn-primary mb-3"> Tambah Data </a>
        <table class="table table-striped">
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody><?php $i=1;?>

    <?php foreach ($guru as $g): ?>
          
    <tr>
    <th scope="row"><?=$i++;?></th>
   <td><img src="/img/<?=$g['foto'];?>" alt="" class="foto"></td>
     <td><?=$g['nama'];?>" </td>
      <td> <a href="/guru/<?=$g['slug'];?>" class="btn btn-success">Detail</button> </td>
  
      
    </tr>
    <?php endforeach;?>
 
  </tbody>
</table>
       
        </div>
    </div>
</div>
<?= $this->endSection();?>