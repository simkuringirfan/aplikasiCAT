<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="col">
            
<div class="container">
    <div class="row">
        <div class="col">
        <h2 class="mt-2">Daftar Users</h2>
        <a href="/Cat/createUsers" class="btn btn-primary">Tambah Data User</a>
        <?php if (session()->getFlashData('Pesan')) :?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashData('Pesan'); ?>
</div>
        <?php endif; ?>
        <table class="table table-bordered">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id User</th>
      <th scope="col">NIP</th>
      <th scope="col">Jenis User</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;?>
    <?php foreach($users as $u) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $u['id_user']; ?></td>
      <td><?= $u['nip']; ?></td>
      <td><?= $u['jenis_user']; ?></td>
      <td><?= $u['username']; ?></td>
      <td><?= $u['password']; ?></td>
      <!-- <td>
          <img src="/img/<?= $u['image']; ?>" alt="" class="gambar">
      </td> -->
      <td>
          <a href="/cat/<?= $u['id_user']; ?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</table>
        </div>
    </div>
</div>

</div>
</div>

<?= $this->endSection(); ?>