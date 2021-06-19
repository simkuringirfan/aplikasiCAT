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
                                <a href="#" class="logo logo-admin"><img src="<?= base_url(); ?>/assets/images/logo-dark.png" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Silahkan Melakukan Ujian</h5>

                        <form class="form-horizontal m-t-30" action="/Ujian/ujian/<?= $regUjian['no_reg_ujian']; ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="p-20">  
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">                                                     
                                                <div class="form-group">

                                                  <tr>
                                                    <th>Id</th>          
                                                    <th><?= $regUjian['id']; ?></th> 
                                                  </tr>      
                                                  <tr>                           
                                                    <th>No. Reg. Ujian</th>
                                                    <th><?= $regUjian['no_reg_ujian']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>NIK</th>
                                                    <th><?= $regUjian['nik']; ?></th>
                                                  <tr> 
                                                    <th>NIP</th>
                                                    <th><?= $regUjian['nip']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Nama Peserta</th>
                                                    <th><?= $regUjian['nama_peserta']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Jenis Kelamin</th>
                                                    <th><?= $regUjian['jenis_kelamin']; ?></th>
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
                                                    <th>Tempat Lahir</th>
                                                    <th><?= $regUjian['tempat_lahir']; ?></th>
                                                  </tr> 
                                                  <tr> 
                                                    <th>Tanggal Lahir</th>
                                                    <th><?= $regUjian['tanggal_lahir']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Kode Test</th>
                                                    <th><?= $regUjian['kode_test']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Bidang Test</th>
                                                    <th><?= $regUjian['id_bidang_test']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Sub Bidang Test</th>
                                                    <th><?= $regUjian['id_sub_bidang_test']; ?></th>
                                                  </tr>
                                                  <tr> 
                                                    <th>Unit Kerja</th>
                                                    <th><?= $regUjian['id_unit_kerja']; ?></th>
                                                  </tr>
                                                </div>
                                                </table>                                                    

                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->    
                                        <hr>              
                            <div class="form-group text-center m-t-20">
									<div class="col-12">
										<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="button" data-toggle="modal" data-target="#free">Masuk Ujian</button>
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
                Apakah data anda sudah SESUAI ?

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Sesuai</button>
            </div>
          </div>
        </div>
      </div>

                        </form>

                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="p-20">  
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">                                                     
                                                <div class="form-group">

                                                  <tr>
                                                    <th>Tata Tertib Pelaksanaan Ujian:</th>
                                                  </tr>      
                                                  <tr>                           
                                                    <td><?= $config['tata_tertib']; ?></td>
                                                  </tr>                                            
                                                </div>                                             
                                                </table>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                    </div>
                </div>
            </div>
        <!-- END wrapper -->

<?= $this->endSection(); ?>