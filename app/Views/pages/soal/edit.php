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
                                    <h4 class="page-title">Form Edit Soal</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Soal</a></li>
                                        <li class="breadcrumb-item active">Edit Soal</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <form action="/Soal/ubah/<?= $soal['id']; ?>" method="POST" class="user" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="p-20">
                                                        <div class="form-group">
                                                            <label>Id</label>
                                                            <input type="text" class="form-control <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $soal['id']; ?>" placeholder="Id" readonly>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('id'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Soal</label>
                                                            <textarea type="text" class="form-control <?= ($validation->hasError('soal'))? 'is-invalid' : ''; ?>" id="soal" name="soal" value="<?= $soal['soal']; ?>" placeholder="Soal" autofocus><?= $soal['soal']; ?></textarea>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('soal'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Jawaban</label>
                                                            <textarea type="text" class="form-control <?= ($validation->hasError('jawaban'))? 'is-invalid' : ''; ?>" id="jawaban" name="jawaban" value="<?= $soal['jawaban']; ?>"
                                                              placeholder="Jawaban" autofocus><?= $soal['jawaban']; ?></textarea>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('jawaban'); ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Jenis Soal</label>
                                                            <input type="text"  class="form-control <?= ($validation->hasError('jenis_soal'))? 'is-invalid' : ''; ?>" id="jenis_soal" name="jenis_soal" value="<?= $soal['jenis_soal']; ?>"
                                                              placeholder="Jenis Soal">
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('jenis_soal'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Point Soal</label>
                                                            <input type="text"  class="form-control <?= ($validation->hasError('point_soal'))? 'is-invalid' : ''; ?>" id="point_soal" name="point_soal" value="<?= $soal['point_soal']; ?>"
                                                                placeholder="Point Soal">
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('point_soal'); ?>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
        
                                            <div class="col-lg-6">
                                                <div class="p-20">
                                                        <div class="form-group">
                                                            <label>Jawaban Benar</label>
                                                            <textarea type="text" rows="4" class="form-control <?= ($validation->hasError('jawaban_benar'))? 'is-invalid' : ''; ?>" id="jawaban_benar" name="jawaban_benar" value="<?= $soal['jawaban_benar']; ?>"
                                                                placeholder="Jawaban Benar"><?= $soal['jawaban_benar']; ?></textarea>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('jawaban_benar'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Jenis Test</label>
                                                                <select class="form-control <?= ($validation->hasError('kode_test'))? 'is-invalid' : ''; ?>" id="kode_test" name="kode_test">
                                                                    <option><?= old('kode_test') ? old('kode_test') : $soal['kode_test'] ?></option>
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

                                                        <div class="form-group">
                                                            <label>Bidang Test</label>
                                                                <select class="form-control <?= ($validation->hasError('id_bidang_test'))? 'is-invalid' : ''; ?>" id="id_bidang_test" name="id_bidang_test">
                                                                    <option><?= old('id_bidang_test') ? old('id_bidang_test') : $soal['id_bidang_test'] ?></option>
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

                                                        <div class="form-group">
                                                            <label>Sub Bidang Test</label>
                                                                <select class="form-control <?= ($validation->hasError('id_sub_bidang_test'))? 'is-invalid' : ''; ?>" id="id_sub_bidang_test" name="id_sub_bidang_test">
                                                                    <option><?= old('id_sub_bidang_test') ? old('id_sub_bidang_test') : $soal['id_sub_bidang_test'] ?></option>
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

                                                        <div class="form-group">
                                                            <label>Unit Kerja</label>
                                                                <select class="form-control <?= ($validation->hasError('id_unit_kerja'))? 'is-invalid' : ''; ?>" id="id_unit_kerja" name="id_unit_kerja">
                                                                    <option><?= old('id_unit_kerja') ? old('id_unit_kerja') : $soal['id_unit_kerja'] ?></option>
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
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <hr>
                                <button type="submit" class="btn btn-warning waves-effect waves-light">
                                    Ubah
                                 </button>
                                 <a href="/Soal/soal" class="btn btn-danger waves-effect waves-light">Batal</a>
                            </form>   
                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->
            
<?= $this->endSection(); ?>