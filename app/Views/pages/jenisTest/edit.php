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
                                    <h4 class="page-title">Form Edit Jenis Test</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Jenis Test</a></li>
                                        <li class="breadcrumb-item active">Edit Jenis Test</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <form action="/JenisTest/ubah/<?= $jenisTest['id']; ?>" method="POST" class="user" enctype="multipart/form-data">
                                      <?= csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="id" class="col-sm-2 col-form-label">Id</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $jenisTest['id']; ?>" type="text"
                                                 placeholder="Id" readonly>
                                                 <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('id'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_test" class="col-sm-2 col-form-label">Nama Test</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('nama_test'))? 'is-invalid' : ''; ?>" id="nama_test" name="nama_test" value="<?= old('nama_test') ? old('nama_test') : $jenisTest['nama_test'] ?>" type="text"
                                                   placeholder="Nama Test" autofocus>
                                                   <div id="validationServer03Feedback" class="invalid-feedback">
                                                        <?= $validation->getError('nama_test'); ?>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="hasil_cat" class="col-sm-2 col-form-label">Hasil CAT</label>
                                            <div class="col-sm-10">
                                                <select class="form-control <?= ($validation->hasError('hasil_cat'))? 'is-invalid' : ''; ?>" id="hasil_cat" name="hasil_cat">
                                                    <option><?= old('hasil_cat') ? old('hasil_cat') : $jenisTest['hasil_cat'] ?></option>
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('hasil_cat'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                    <button type="submit" class="btn btn-warning waves-effect waves-light">
                                        Ubah
                                    </button>
                                    <a href="/JenisTest/jenisTest" class="btn btn-danger waves-effect waves-light">Batal</a>                                
                            </form>   

                            </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

<?= $this->endSection(); ?>