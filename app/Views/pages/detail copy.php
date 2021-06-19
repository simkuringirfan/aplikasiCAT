<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="col">

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail</h2>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $users['image']; ?>" width="170" height="200" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $users['nama_user']; ?></h5>
        <p class="card-text">Alamat : <?= $users['alamat_user']; ?></p>

        <a href="/Cat/edit/<?= $users['id_user']; ?>" class="btn btn-warning">Edit</a>

        <form action="/Cat/<?= $users['id_user']; ?>" method="post" class="d-inline">
        <?= csrf_field(); ?> 
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan delete user <?= $users['id_user']; ?> dengan nama <?= $users['nama_user']; ?>?')"> Delete</button><br><br>
        </form>
        <a href="/Cat/users" >Kembali ke List Users</a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>

</div>
</div>
<?= $this->endSection(); ?>