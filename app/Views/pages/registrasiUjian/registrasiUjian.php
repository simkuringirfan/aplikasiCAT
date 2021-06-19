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
                                    <h4 class="page-title">Daftar Peserta Ujian</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ujian</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Registrasi Ujian</a></li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
        
                                        <a href="/RegistrasiUjian/createRegistrasiUjian/"><button type="button" class="btn btn-primary waves-effect waves-light">Registrasi Ujian</button></a>
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
                                            <th>No. Reg. Ujian</th>
                                            <th>NIK</th>
                                            <th>NIP</th>
                                            <th>Nama Peserta</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Action</th>
                                            <th>Pin Registrasi</th>
                                            <th>Kode Test</th>
                                            <th>Bidang Test</th>
                                            <th>Sub Bidang Test</th>
                                            <th>Unit Kerja</th>
                                            <th>Create Data</th>
                                            <th>Update Data</th>                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1 + (20 * ($currentPage - 1));?>
                                    <?php foreach($registrasiUjianBy as $b) : ?>
                                    <tr>
                                      <td><?= $b['id']; ?></td>
                                      <td><?= $b['no_reg_ujian']; ?></td>
                                      <td><?= $b['nik']; ?></td>
                                      <td><?= $b['nip']; ?></td>
                                      <td><?= $b['nama_peserta']; ?></td>
                                      <td><?= $b['jenis_kelamin']; ?></td>
                                      <td><?= $b['tempat_lahir']; ?></td>
                                      <td><?= $b['tanggal_lahir']; ?></td>                                      
                                      <td>
                                          <form action="/RegistrasiUjian/<?= $b['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?> 
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" class="btn btn-danger-outline waves-effect waves-light" data-toggle="modal" data-target="#myModal<?= $b['id']; ?>"><i class="far fa-trash-alt"></i></button>

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
            Apakah anda yakin akan delete No. Registrasi Ujian <?= $b['no_reg_ujian']; ?> 
            <br> dengan Nama Peserta <?= $b['nama_peserta']; ?>?

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
                                      <td><?= $b['pin_reg']; ?></td>
                                      <td><?= $b['kode_test']; ?></td>
                                      <td><?= $b['id_bidang_test']; ?></td>
                                      <td><?= $b['id_sub_bidang_test']; ?></td>
                                      <td><?= $b['id_unit_kerja']; ?></td>
                                      <td><?= $b['create_date']; ?></td>
                                      <td><?= $b['update_date']; ?></td>
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