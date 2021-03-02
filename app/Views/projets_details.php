<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="container">
<div class="card">
   <div class="card-body">
       
            <p class="card-text mb-auto"><?= $projets['commentaire'] ?></p>

            <br>

           <strong class="d-inline-block mb-2 text-primary"><?= $projets['created_at'] ?></strong>
           <br><br>
           <a class="btn btn-outline-primary btn-sm" role="button" href="<?= base_url('/prj') ?>">Back</a>
    
  </div>

</div>
</div>
<br> 
<br> <br> <br> <br> <br> <br> 
<?= $this->endSection() ?> 
</body>
</html>
