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
                                    <h4 class="page-title">Form Tambah Soal</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Soal</a></li>
                                        <li class="breadcrumb-item active">Tambah Soal</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <form action="/Soal/save" method="POST" class="user" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="p-20">
                                                        <div class="form-group">
                                                            <label>Soal</label>
                                                            <textarea type="text" placeholder="Soal" class="form-control <?= ($validation->hasError('soal'))? 'is-invalid' : ''; ?>" id="soal" name="soal" value="<?= old('soal'); ?>" rows="4" autofocus></textarea>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('soal'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Jenis Soal</label>
                                                            <input type="text" placeholder="Jenis Soal"  class="form-control <?= ($validation->hasError('jenis_soal'))? 'is-invalid' : ''; ?>" id="jenis_soal" name="jenis_soal" value="<?= old('jenis_soal'); ?>">
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('jenis_soal'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Jenis Test</label>
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

                                                        <div class="form-group">
                                                            <label>Bidang Test</label>
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
                                                        
                                                        <div class="form-group">
                                                            <label>Sub Bidang Test</label>
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
                                            </div>
        
                                            <div class="col-lg-6">
                                                <div class="p-20">  
                                                        <div class="form-group">
                                                            <label>Unit Kerja</label>
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

                                                        <div class="form-group">
                                                <table class="table table-sm table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Jawaban</th>
                                                            <th>#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="formtambahsoal" class="formtambahsoal">
                                                    <input id="idf" value="1" type="hidden">
                                                        <tr>                                                        
                                                            <td>                                                                
                                                                <textarea type="text" placeholder="Jawaban"  class="form-control <?= ($validation->hasError('jawaban'))? 'is-invalid' : ''; ?>" id="jawaban[]" name="jawaban[]" value="<?= old('jawaban[]'); ?>"></textarea>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('jawaban'); ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button id="btnaddformsoal" name="btnaddformsoal" type="button" class="btn btn-primary btnaddformsoal" onclick="tambahInputSoal(); return false;">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>                 

                                        <div class="form-group">
                                        <label>Nilai</label>
                                                <table class="table table-sm table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Jawaban Benar</th>
                                                            <th>Point Soal</th>
                                                            <th>#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="formtambahsoal2" class="formtambahsoal2">
                                                    <input id="idf2" value="1" type="hidden">
                                                        <tr>
                                                            <td>                                                                
                                                                <textarea type="text" placeholder="Jawaban Benar"  class="form-control <?= ($validation->hasError('jawaban_benar'))? 'is-invalid' : ''; ?>" id="jawaban_benar[]" name="jawaban_benar[]" value="<?= old('jawaban_benar[]'); ?>"></textarea>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('jawaban_benar'); ?>
                                                                </div>
                                                            </td>
                                                            <td>                                                                
                                                                <input type="text" placeholder="Point Soal"  class="form-control <?= ($validation->hasError('point_soal'))? 'is-invalid' : ''; ?>" id="point_soal[]" name="point_soal[]" value="<?= old('point_soal[]'); ?>">
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('point_soal'); ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button id="btnaddformsoal2" name="btnaddformsoal2" type="button" class="btn btn-primary btnaddformsoal2" onclick="tambahInputSoal2(); return false;">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>

                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <hr>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Simpan
                                </button>
                            </form>   
                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->
            
<?= $this->endSection(); ?>