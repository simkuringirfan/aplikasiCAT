<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
	<div class="row justify-content-left">
		<div class="col-md-5">
			<div class="card o-hidden border-0 shadow-lg my-2">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Form Edit Users</h1>
								</div>

								<form action="/Cat/ubah/<?= $users['id']; ?>" method="POST" enctype="multipart/form-data">
									<?= csrf_field(); ?>
									<div class="row mb-3">
										<label for="id" class="col-sm-2 col-form-label">Id</label>
										<div class="col-sm-10">
											<input type="text" class="form-control <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $users['id']; ?>" placeholder="id" readonly>
												<div id="validationServer03Feedback" class="invalid-feedback">
													<?= $validation->getError('id'); ?>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-10">
												<input type="text" class="form-control <?= ($validation->hasError('fullname'))? 'is-invalid' : ''; ?>" id="fullname" name="fullname" value="<?= old('fullname') ? old('fullname') : $users['fullname'] ?>" placeholder="Full Name" autofocus>
													<div id="validationServer03Feedback" class="invalid-feedback">
														<?= $validation->getError('fullname'); ?>
													</div>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-10">
													<input type="email" class="form-control <?= ($validation->hasError('email'))? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email') ? old('email') : $users['email'] ?>" placeholder="Email">
														<div id="validationServer03Feedback" class="invalid-feedback">
															<?= $validation->getError('email'); ?>
														</div>
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-sm-10">
														<input type="username" class="form-control <?= ($validation->hasError('username'))? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= old('username') ? old('username') : $users['username'] ?>" placeholder="Username">
															<div id="validationServer03Feedback" class="invalid-feedback">
																<?= $validation->getError('username'); ?>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-sm-10">
															<input type="password" class="form-control <?= ($validation->hasError('password'))? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password') ? old('password') : $users['password'] ?>">
																<div id="validationServer03Feedback" class="invalid-feedback">
																	<?= $validation->getError('password'); ?>
																</div>
															</div>
														</div>
														<button type="submit" class="btn btn-primary">Ubah Users</button>
														<a href="/Cat/users" class="btn btn-danger">Batal</a>
														<button type="submit" class="btn btn-primary-outline">
															<i class="far fa-save fa-lg">
																<?=lang('Auth.register')?>
															</i>
														</button>                       
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- End of Main Content -->

				<div class="col">

					<div class="container">
						<div class="row">
							<div class="col-8">
								<h2 class="my-3">Form Edit Users</h2>
								<form action="/Cat/ubah/<?= $users['id']; ?>" method="POST" enctype="multipart/form-data">
									<?= csrf_field(); ?>
									<div class="row mb-3">
										<label for="id" class="col-sm-2 col-form-label">Id</label>
										<div class="col-sm-10">
											<input type="text" class="form-control <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $users['id']; ?>" placeholder="id" readonly>
												<div id="validationServer03Feedback" class="invalid-feedback">
													<?= $validation->getError('id'); ?>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<label for="nip" class="col-sm-2 col-form-label">NIP</label>
											<div class="col-sm-10">
												<input type="text" class="form-control <?= ($validation->hasError('nip'))? 'is-invalid' : ''; ?>" id="nip" name="nip" value="<?= old('nip') ? old('nip') : $users['nip'] ?>" autofocus>
													<div id="validationServer03Feedback" class="invalid-feedback">
														<?= $validation->getError('nip'); ?>
													</div>
												</div>
											</div>
											<div class="row mb-3">
												<label for="jenis_user" class="col-sm-2 col-form-label">Jenis User</label>
												<div class="col-sm-10">
													<input type="text" class="form-control <?= ($validation->hasError('jenis_user'))? 'is-invalid' : ''; ?>" id="jenis_user" name="jenis_user" value="<?= old('jenis_user') ? old('jenis_user') : $users['jenis_user'] ?>">
														<div id="validationServer03Feedback" class="invalid-feedback">
															<?= $validation->getError('jenis_user'); ?>
														</div>
													</div>
												</div>
												<div class="row mb-3">
													<label for="username" class="col-sm-2 col-form-label">Username</label>
													<div class="col-sm-10">
														<input type="text" class="form-control <?= ($validation->hasError('username'))? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= old('username') ? old('username') : $users['username'] ?>">
															<div id="validationServer03Feedback" class="invalid-feedback">
																<?= $validation->getError('username'); ?>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<label for="password" class="col-sm-2 col-form-label">Password</label>
														<div class="col-sm-10">
															<input type="password" class="form-control <?= ($validation->hasError('password'))? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password') ? old('password') : $users['password'] ?>">
																<div id="validationServer03Feedback" class="invalid-feedback">
																	<?= $validation->getError('password'); ?>
																</div>
															</div>
														</div>
														<button type="submit" class="btn btn-primary">Ubah Users</button>
														<a href="/Cat/users" class="btn btn-danger">Batal</a>
													</form>

												</div>
											</div>
										</div>

									</div>
								</div>
								<?= $this->endSection(); ?>