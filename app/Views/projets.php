<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="st.css">
    <title>Mes projets</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="container">

   <h3 class="pb-3 mb-4 font-italic border-bottom">
      Mes projets
   </h3>
  
   <div class="row">
   <?php foreach ($projets as $prj) : ?>
      <div class="col-md-6">
     
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
          
               <strong class="d-inline-block mb-2 text-primary"><?= $prj['slug'] ?></strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#"><?= $prj['titre'] ?></a>
               </h6>
               <p class="card-text mb-auto"><?= $prj['technologie'] ?></p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="<?= base_url('prj/'.$prj['id'].'/viewProjects') ?>">Read More</a>
              
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="<?= $prj['image'] ?>" style="width: 200px; height: 250px;">
         </div>
        
      </div>
      <?php endforeach ?>
</div>

  </div>
  <?= $this->endSection() ?>
</body>
      

</html>
 