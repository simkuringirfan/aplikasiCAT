<?= $this->extend('layout/templatePengguna'); ?>
<?= $this->section('content'); ?>

<!-- Begin page -->
<div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="<?= base_url('logout'); ?>" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="#" class="logo logo-admin"><img src="<?= base_url(); ?>/assets/images/favicon.ico" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Login Ujian</h5>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form class="form-horizontal m-t-30" action="/RegistrasiUjian/loginUjian" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="form-group">
						<div class="col-12">
							<label>No. Reg. Ujian</label>
							<input class="form-control <?= ($validation->hasError('no_reg_ujian'))? 'is-invalid' : ''; ?>" type="text" id="no_reg_ujian" required="" name="no_reg_ujian" value="<?= old('no_reg_ujian'); ?>" placeholder="No Regis Ujian" autofocus>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('no_reg_ujian'); ?>
                                    </div>
							</div>
						</div>
    
                        <div class="form-group">
							<div class="col-12">
								<label>Password</label>
								<input class="form-control <?= ($validation->hasError('pin_reg'))? 'is-invalid' : ''; ?>" type="password" id="pin_reg" required="" name="pin_reg" value="<?= old('pin_reg'); ?>" placeholder="Pin Regis" autofocus>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('pin_reg'); ?>
                                    </div>
								</div>
							</div>

                            <div class="form-group text-center m-t-20">
									<div class="col-12">
										<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Lanjutkan</button>
									</div>
								</div>  
                        </form>
                    </div>
                </div>
            </div>
        <!-- END wrapper -->

<?= $this->endSection(); ?>