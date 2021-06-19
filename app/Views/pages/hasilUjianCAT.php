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
                                    <h4 class="page-title">Daftar Hasil Ujian CAT</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hasi Ujian</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hasil Ujian CAT</a></li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
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
                                            <th>Id Ujian CAT</th>
                                            <th>No Reg Ujian</th>
                                            <th>Id Config</th>
                                            <th>Kode Test</th>
                                            <th>Nama Test</th>
                                            <th>Hasil CAT</th>
                                            <th>Soal Dijawab</th>
                                            <th>Action</th>
                                            <th>Belum Jawab</th>
                                            <th>Selesai Ujian</th>
                                            <th>Nilai Total</th>
                                            <th>Grade</th>
                                            <th>Status Ujian</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($dataUjian as $b) : ?>
                                    <tr>
                                      <td><?= $b['id_ujian_cat']; ?></td>
                                      <td><?= $b['no_reg_ujian']; ?></td>
                                      <td><?= $b['id_config']; ?></td>
                                      <td><?= $b['kode_test']; ?></td>
                                      <td><?= $b['nama_test']; ?></td>
                                      <td><?= $b['hasil_cat']; ?></td>
                                      <td><?= $b['soal_dijawab']; ?></td>

                                      <td>
                                          <form action="/Ujian/<?= $b['no_reg_ujian']; ?>;hasilUjianCat" method="post" class="d-inline">
                                        <?= csrf_field(); ?> 
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" class="btn btn-danger-outline waves-effect waves-light" data-toggle="modal" data-target="#myModal<?= $b['no_reg_ujian']; ?>"><i class="far fa-trash-alt"></i></button>
                                        
                                        <div class="modal fade" id="myModal<?= $b['no_reg_ujian']; ?>" tabindex="-1" role="dialog" aria-labelledby="free123" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="free123">Perhatian!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            Apakah anda yakin akan delete Hasil Ujian dengan <br>
            No Reg <?= $b['no_reg_ujian']; ?> ?

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

                                      <td><?= $b['belum_jawab']; ?></td>
                                      <td><?= $b['selesai_ujian']; ?></td>
                                      <td><?= $b['nilai_total']; ?></td>
                                      <td><?= $b['grade']; ?></td>
                                      <td><?= $b['status_ujian']; ?></td>
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