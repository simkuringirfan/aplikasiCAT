<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Jawaban</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-2">
                            <h6><a href="/Jawaban/createJawaban/" class="m-0 font-weight-bold text-primary"><i class="fas fa-location-arrow"></i> Tambah Jawaban</a></h6>
                            <?php if (session()->getFlashData('Pesan')) :?>
                            <div class="alert alert-success" role="alert">
                            <?= session()->getFlashData('Pesan'); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Soal</th>
                                            <th>Jawaban</th>
                                            <th>Create Date</th>
                                            <th>Update Date</th>
                                            <th>Action</th>
                                        </tr>  
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Soal</th>
                                            <th>Jawaban</th>
                                            <th>Create Date</th>
                                            <th>Update Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1 + (20 * ($currentPage - 1));?>
                                    <?php foreach($jawabanBy as $b) : ?>
                                    <tr>
                                        <td><?= $b['id']; ?></td>
                                        <td><?= $b['id_soal']; ?></td>
                                        <td><?= $b['jawaban']; ?></td>
                                        <td><?= $b['create_date']; ?></td>
                                        <td><?= $b['update_date']; ?></td>
                                      <td>
                                          <a href="/Jawaban/edit/<?= $b['id']; ?>" class="btn btn-warning btn-circle btn-sm">
                                             <i class="far fa-edit"></i>
                                          </a>
                                          <form action="/Jawaban/<?= $b['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?> 
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?= $b['id']; ?>"><i class="far fa-trash-alt"></i></button>

                                        <div class="modal fade" id="myModal<?= $b['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="free123" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="free123">Perhatian!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            Apakah anda yakin akan delete Id Sub Bidang Test <?= $b['id']; ?> dengan Jawaban <?= $b['jawaban']; ?>?

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Ya</button>
            </div>
          </div>
        </div>
      </div>
                                        </form>
                                      </td>
                                    </tr>
                                    <?php endforeach;?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
<?= $this->endSection(); ?>