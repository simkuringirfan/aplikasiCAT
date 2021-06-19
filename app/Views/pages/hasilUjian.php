<?= $this->extend('layout/templatePengguna'); ?>
<?= $this->section('content'); ?>

<!-- Begin page -->
<div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="?= base_url('logout'); ?>" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page-0">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="#" class="logo logo-admin"><img src="<?= base_url(); ?>/assets/images/favicon.ico" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Hasil Ujian</h5>

                        <form class="form-horizontal m-t-30" action="/Auth/dashboard" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="p-20">  
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">                                                     
                                                <div class="form-group">    
                                                  <tr>                           
                                                    <th>No. Reg. Ujian</th>
                                                    <th><?= $dataRegistUjian['no_reg_ujian']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>NIK</th>
                                                    <th><?= $dataRegistUjian['nik']; ?></th>
                                                  <tr> 
                                                    <th>NIP</th>
                                                    <th><?= $dataRegistUjian['nip']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Nama Peserta</th>
                                                    <th><?= $dataRegistUjian['nama_peserta']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Jenis Kelamin</th>
                                                    <th><?= $dataRegistUjian['jenis_kelamin']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Tempat, Tanggal Lahir</th>
                                                    <th><?= $dataRegistUjian['tempat_lahir']; ?>, <?= date("d-m-Y",strtotime($dataRegistUjian['tanggal_lahir'])); ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Test</th>
                                                    <th><?= $dataJenisTest['nama_test']; ?></th>
                                                  </tr>                                                       
                                                </div>                                             
                                                </table>
                                                </div>
                                            </div>
        
                                            <div class="col-lg-6">
                                                <div class="p-20">
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <div class="form-group">
                                                  <tr> 
                                                    <th>Total Soal</th>
                                                    <th><?= $dataUjian['soal_dijawab'] + $dataUjian['belum_jawab']; ?></th>
                                                  </tr> 
                                                  <tr> 
                                                    <th>Soal Dijawab</th>
                                                    <th><?= $dataUjian['soal_dijawab']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Tidak Dijawab</th>
                                                    <th><?= $dataUjian['belum_jawab']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Selesai Ujian</th>
                                                    <th><?= $dataUjian['selesai_ujian']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Nilai Total</th>
                                                    <th><?= $dataUjian['nilai_total']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Grade</th>
                                                    <th><?= $dataUjian['grade']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Status Ujian</th>
                                                    <th><?= $dataUjian['status_ujian']; ?></th>
                                                  </tr>
                                                </div>
                                                </table>                                                    

                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->    
                                        <hr>              
                            <div class="form-group text-center m-t-20">
									<div class="col-12">
										<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="button" data-toggle="modal" data-target="#free">Akhiri</button>
									</div>
								</div>  
                                        
      <div class="modal fade" id="free" tabindex="-1" role="dialog" aria-labelledby="free123" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="free123">Perhatian!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Akhiri ?

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Sesuai</button>
            </div>
          </div>
        </div>
      </div>

                        </form>
                    </div>
                </div>
            </div>
        <!-- END wrapper -->

<?= $this->endSection(); ?>