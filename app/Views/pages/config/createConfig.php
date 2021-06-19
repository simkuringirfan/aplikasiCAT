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
                                    <h4 class="page-title">Form Tambah Config</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Configurasi Ujian</a></li>
                                        <li class="breadcrumb-item active">Tambah Config</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <form action="/Config/save" method="POST" class="user" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="jumlah_soal" class="col-sm-2 col-form-label">Jumlah Soal</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('jumlah_soal'))? 'is-invalid' : ''; ?>" type="text" id="jumlah_soal" name="jumlah_soal" value="<?= old('jumlah_soal'); ?>"
                                                placeholder="Jumlah Soal" autofocus>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('jumlah_soal'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="waktu_ujian" class="col-sm-2 col-form-label">Waktu Ujian</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('waktu_ujian'))? 'is-invalid' : ''; ?>" type="text" id="waktu_ujian" name="waktu_ujian" value="<?= old('waktu_ujian'); ?>"
                                                placeholder="Waktu Ujian" autofocus>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('waktu_ujian'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                                            <label for="kode_test" class="col-sm-2 col-form-label">Jenis Test</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control <?= ($validation->hasError('kode_test'))? 'is-invalid' : ''; ?>" id="kode_test" name="kode_test">
                                                                    <option>Select</option>
                                                                    <?php foreach($jenisTest as $jt) : ?>
                                                                    <option>
                                                                    <?= $jt['id']; ?>-<?= $jt['nama_test']; ?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('kode_test'); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">                                                        
                                                            <label for="id_bidang_test" class="col-sm-2 col-form-label">Bidang Test</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control <?= ($validation->hasError('id_bidang_test'))? 'is-invalid' : ''; ?>" id="id_bidang_test" name="id_bidang_test">
                                                                    <option>Select</option>
                                                                    <?php foreach($bidangTest as $b) : ?>
                                                                    <option>
                                                                    <?= $b['id']; ?>-<?= $b['bidang_test']; ?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('id_bidang_test'); ?>
                                                                </div>
                                                        </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="id_sub_bidang_test" class="col-sm-2 col-form-label">Sub Bidang Test</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control <?= ($validation->hasError('id_sub_bidang_test'))? 'is-invalid' : ''; ?>" id="id_sub_bidang_test" name="id_sub_bidang_test">
                                                                    <option>Select</option>
                                                                    <?php foreach($subBidangTest as $sb) : ?>
                                                                    <option>
                                                                    <?= $sb['id']; ?>-<?= $sb['sub_bidang_test']; ?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('id_sub_bidang_test'); ?>
                                                                </div>
                                                        </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="id_unit_kerja" class="col-sm-2 col-form-label">Unit Kerja</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control <?= ($validation->hasError('id_unit_kerja'))? 'is-invalid' : ''; ?>" id="id_unit_kerja" name="id_unit_kerja" value="<?= old('id_unit_kerja'); ?>">
                                                                    <option>Select</option>
                                                                    <?php foreach($unitKerja as $uk) : ?>
                                                                    <option>
                                                                    <?= $uk['id']; ?>-<?= $uk['unit_kerja']; ?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('id_unit_kerja'); ?>
                                                                </div>
                                                        </div>
                                                        </div>


                                        <hr>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Simpan
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