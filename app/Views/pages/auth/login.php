<?= $this->extend('layout/templatePengguna'); ?>
<?= $this->section('content'); ?>

    <!-- Begin page -->
    <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="<?= base_url(); ?>/assets/images/favicon.ico" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Sign in Untuk Menggunakan Aplikasi</h5>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form class="form-horizontal m-t-30" action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>
					<?php if ($config->validFields === ['email']): ?>
                        <div class="form-group">
						<div class="col-12">
							<label>Username/Email</label>
							<input class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" type="email" required="" name="login" placeholder="<?=lang('Auth.email')?>">
                                <div class="invalid-feedback">
													<?= session('errors.login') ?>
												</div>
							</div>
						</div>
                        <?php else: ?>     
                            <div class="form-group">                                   
                        <div class="col-12">
							<label>Username</label>
							<input class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" required="" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                <div class="invalid-feedback">
													<?= session('errors.login') ?>
												</div>
							</div>
						</div>
                        <?php endif; ?>
    
                        <div class="form-group">
							<div class="col-12">
								<label>Password</label>
								<input class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" required="" name="password" placeholder="<?=lang('Auth.password')?>">
                                    <div class="invalid-feedback">
                                                    <?= session('errors.password') ?>
                                                </div>
								</div>
							</div>

                            <?php if ($config->allowRemembering): ?>
							<div class="form-group">
								<div class="col-12">
									<div class="checkbox checkbox-primary">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="remembering" name="remembering" <?php if(old('remember')) : ?> checked <?php endif ?>>
												<label class="custom-control-label" for="remembering"><?=lang('Auth.rememberMe')?></label>
											</div>
										</div>
									</div>
								</div>
                                <?php endif; ?>

                            <div class="form-group text-center m-t-20">
									<div class="col-12">
										<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
									</div>
								</div>
    
                            <div class="form-group row m-t-30 m-b-0">

                                <?php if ($config->activeResetter): ?>
									<div class="col-sm-7">
										<a href="<?= route_to('forgot') ?>" class="text-muted">
											<i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
									</div>
                                    <?php endif; ?>	

                                    <?php if ($config->allowRegistration):?>
									<div class="col-sm-5 text-right">
										<a href="<?= route_to('register') ?>" class="text-muted">Create an account</a>
									</div>
                                    <?php endif; ?>
                            </div>
                        </form>
                    <form action="<?= route_to('login') ?>" method="post" class="user">
									<?= csrf_field() ?>
									<?php if ($config->validFields === ['email']): ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" hidden>												
                                        </div>
										<?php else: ?>                                        
										<div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" value="ujian" hidden>
                                        </div>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                name="password" value="150919933" hidden>
                                        </div>           
                                        
                                        <div class="form-group text-center m-t-20">
									<div class="col-12">
										<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Langsung Masuk Ujian</button>
									</div>
								</div>
                                    </form>
                                    </div>

                </div>
            </div>
        <!-- END wrapper -->

<?= $this->endSection(); ?>