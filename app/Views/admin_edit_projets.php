<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $projets['id'] ?>" />
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" name="titre" class="form-control" 
            placeholder="projets title" value="<?= $projets['titre'] ?>" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" 
            placeholder="upload image" value="<?= $projets['image'] ?>" >
    </div>
    <div class="form-group">
        <label for="technology">Technologie</label>
        <input type="text" name="technologie" class="form-control" 
            placeholder="write technology" value="<?= $projets['technologie'] ?>" required>
    </div>
    <div class="form-group">
        <textarea name="commentaire" 
            class="form-control" 
            cols="30" rows="10" 
            placeholder="Write a comment!"><?= $projets['commentaire'] ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="Edit"  class="btn btn-primary">Edit</button>
    </div>
</form>


<?= $this->endSection() ?>