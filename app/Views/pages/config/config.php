<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Daftar Config</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Configurasi Ujian</a></li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                        <a href="/Config/createConfig"><button type="button" class="btn btn-primary waves-effect waves-light">Tambah Config</button></a>
                                        <?php if (session()->getFlashData('Pesan')) :?>
                                        <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashData('Pesan'); ?>
                                        </div>
                                        <?php endif; ?>
                                        <br>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Jumlah Soal</th>
                                            <th>Waktu Ujian</th>
                                            <th>Kode Test</th>
                                            <th>Id Bidang Test</th>
                                            <th>Id Sub Bidang Test</th>
                                            <th>Id Unit Kerja</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1 + (20 * ($currentPage - 1));?>
                                    <?php foreach($config as $b) : ?>
                                    <tr>
                                      <td><?= $b['id']; ?></td>
                                      <td><?= $b['jumlah_soal']; ?></td>
                                      <td><?= $b['waktu_ujian']; ?></td>
                                      <td><?= $b['kode_test']; ?></td>
                                      <td><?= $b['id_bidang_test']; ?></td>
                                      <td><?= $b['id_sub_bidang_test']; ?></td>
                                      <td><?= $b['id_unit_kerja']; ?></td>
                                      <td>                                          
                                          <form action="/Config/<?= $b['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?> 
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" class="btn btn-danger-outline waves-effect waves-light" data-toggle="modal" data-target="#myModal<?= $b['id']; ?>" ><i class="far fa-trash-alt"></i></button>
                                        

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
            Apakah anda yakin akan delete Confing <?= $b['id']; ?> dengan Kode Test <?= $b['kode_test']; ?>?

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
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- content -->

<?= $this->endSection(); ?>