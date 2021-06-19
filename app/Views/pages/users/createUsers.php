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
                                    <h4 class="page-title">Form Tambah User</h4>
                                </div>

                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Administrator</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                                        <li class="breadcrumb-item active">Tambah User</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <form action="<?= route_to('register') ?>" method="post" class="user">
                                     <?= csrf_field() ?>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" type="email" value="<?= old('email') ?>" id="email"
                                                    placeholder="<?=lang('Auth.email')?>" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" type="username" value="<?= old('username') ?>" id="username"
                                                    placeholder="<?=lang('Auth.username')?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" type="password" id="password"
                                                    placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="pass_confirm" class="col-sm-2 col-form-label">Repeat Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" type="password" id="pass_confirm"
                                                     placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                            </div>
                                        </div>
                                        
                                        <hr>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    <?=lang('Auth.register')?>
                                </button> 
                            </form>   

                            </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

<?= $this->endSection(); ?>