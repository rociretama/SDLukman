<?= $this->extend('layout/template')?>
<?= $this->section('isi')?>

<div class="container">
    <div class="row">
        <div class="col">
        <h1>Kontak</h1>
        <?php foreach($alamat as $a): ?>
           <ul>
           <li><?=$a['tipe'];?>
           </li>
           <li><?=$a['alamat'];?>
           </li>
           <li><?=$a['kota'];?>
           </li>
           </ul>
            <?php endforeach; ?>
        
        <button type="button" class="btn btn-success">WA Admin : Rifal</button> 
     
       
        </div>
    </div>
</div>
<?= $this->endSection();?>