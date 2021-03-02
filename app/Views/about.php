

<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

 <title>About</title>  
    <div class="row mt-7 p-5" >
      <div class="col-12 col-lg-6">
     
      <?= view_cell('\App\Libraries\Aboutlib::recentAbout') ?>


</div>
 
      </div>
      <div class="col-12 col-lg-6">
        <div class="card">
   <div class="card-body">
       <h5 class="card-title">Apropos de moi</h5>
       <div class="col-12 col-lg-6">
       <img class="card-img-top" src="apropos.jfif" >
       </div>
       <br>
      <p class="card-text">Je suis une étudiante en 2 ème année master science et technique en réseaux et systèmes informatique à la FST settat .J'ai l'esprit d'équipe, je suis dynamique et motivé par le développement des applications , ainsi que la recherche des nouvelles technologies çela me fait un profile riche et complet. </p>

   </div>
</div>
      </div>
     
      </div>
  
      <?= $this->endSection() ?>