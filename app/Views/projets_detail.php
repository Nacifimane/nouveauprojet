<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<div class="container">
<div class="card">
   <div class="card-body">
       
            <p class="card-text mb-auto"><?= $projets['commentaire'] ?></p>

            <br>

           <strong class="d-inline-block mb-2 text-primary"><?= $projets['created_at'] ?></strong>
           <br><br>
           <a class="btn btn-outline-primary btn-sm" role="button" href="<?= base_url('/PrjAdmin') ?>">Back</a>
    
  </div>

</div>
</div>
<br> 
<br> <br> <br> <br> <br> <br> 
<?= $this->endSection() ?>



