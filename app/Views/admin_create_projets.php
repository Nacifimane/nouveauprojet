
<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
                
<form action="<?php echo base_url('/PrjAdmin/new'); ?>" method="post" enctype="multipart/form-data" id="text-editor">
<?= csrf_field() ?>
<input type="hidden" name="id"  />
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" name="titre" class="form-control" 
        placeholder="projets title" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" 
        placeholder="upload imge">
    </div>
    <div class="form-group">
        <label for="technology">Technologie</label>
        <input type="text" name="technologie" class="form-control" 
        placeholder="write technology" required>
    </div>
    <div class="form-group">
        <textarea name="commentaire" 
            class="form-control" 
            cols="30" rows="10" 
            placeholder="Write a comment!"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" id="createbtn"  name="Create" class="btn btn-primary">Create</button>
    </div>
</form>

<?= $this->endSection() ?>