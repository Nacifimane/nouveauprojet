<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<style>
#ac {
width :200px;
}
</style>
<?php if(session()->getFlashdata('msg')):?>
              <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
 <?php if(session()->getFlashdata('msgs')):?>
              <div class="alert alert-warning"><?= session()->getFlashdata('msgs') ?></div>
            <?php endif;?>
 <?php if(session()->getFlashdata('msgss')):?>
              <div class="alert alert-danger"><?= session()->getFlashdata('msgss') ?></div>
            <?php endif;?>
<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Titre</th>
    <th>Image</th>
    <th>Technologie</th>
    <th>Commentaire</th>
    <th id="ac">Action</th>
</tr>
</thead>
<tbody>
<?php foreach($projets as $prj): ?>
<tr>
    <td><?= $prj['id'] ?></td>
    <td>
        <strong><?= $prj['titre'] ?></strong><br>
        <small class="text-muted"><?= $prj['created_at'] ?></small>
    </td>
    <td><img src="<?=$prj['image'] ?>" alt=""></td>
    <td>
     <h5><?= $prj['technologie'] ?></h5>
    
    </td>
    <td>
        <p><?= $prj['commentaire'] ?></p>
    </td>
    <td>
        <a href="<?= base_url('PrjAdmin/'.$prj['id'].'/preview') ?>" class="btn btn-sm btn-outline-secondary" target="_blank">Show</a>
        <a href="<?= base_url('PrjAdmin/'.$prj['id'].'/edit') ?>" class="btn btn-sm btn-outline-warning">Edit</a>
        <a href="#" data-href="<?= base_url('PrjAdmin/'.$prj['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>


<?= $this->endSection() ?>