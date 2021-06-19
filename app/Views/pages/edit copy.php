<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="col">

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Edit Users</h2>
            <form action="/Cat/ubah/<?= $users['id_user']; ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="imageLama" value="<?= $users['image']; ?>">
            <div class="row mb-3">
    <label for="id" class="col-sm-2 col-form-label" hidden>Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $users['id']; ?>" placeholder="id" readonly hidden> 
      <div id="validationServer03Feedback" class="invalid-feedback">
          <?= $validation->getError('id'); ?>
    </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="id_user" class="col-sm-2 col-form-label">Id User</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('id_user'))? 'is-invalid' : ''; ?>" id="id_user" name="id_user" value="<?= $users['id_user']; ?>" placeholder="id user" readonly>
      <div id="validationServer03Feedback" class="invalid-feedback">
          <?= $validation->getError('id_user'); ?>
    </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('nama_user'))? 'is-invalid' : ''; ?>" id="nama_user" name="nama_user" value="<?= old('nama_user') ? old('nama_user') : $users['nama_user'] ?>" autofocus>
      <div id="validationServer03Feedback" class="invalid-feedback">
          <?= $validation->getError('nama_user'); ?>
    </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat_user" class="col-sm-2 col-form-label">Alamat User</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('alamat_user'))? 'is-invalid' : ''; ?>" id="alamat_user" name="alamat_user" value="<?= old('alamat_user') ? old('alamat_user') : $users['alamat_user'] ?>">
      <div id="validationServer03Feedback" class="invalid-feedback">
          <?= $validation->getError('alamat_user'); ?>
    </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-2">
      <img src="/img/<?= $users['image'] ?>" class="img-thumbnail img-preview"><br>
    </div>
    <div class="col-sm-8">
    <div class="mb-3">
  <input class="form-control <?= ($validation->hasError('image'))? 'is-invalid' : ''; ?>" type="file" id="image" name="image" onchange="previewImage()">
  <div id="validationServer03Feedback" class="invalid-feedback">
          <?= $validation->getError('image'); ?>
    </div>
</div>
      <!-- <input type="text" class="form-control <?= ($validation->hasError('image'))? 'is-invalid' : ''; ?>" id="image" name="image" value="<?= old('image'); ?>"> -->
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ubah Users</button>
</form>

        </div>
    </div>
</div>

</div>
</div>
<?= $this->endSection(); ?>