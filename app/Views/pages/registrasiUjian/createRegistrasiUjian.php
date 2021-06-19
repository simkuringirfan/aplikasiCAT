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
                                    <h4 class="page-title">Form Registrasi Ujian</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ujian</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Registrasi Ujian</a></li>
                                        <li class="breadcrumb-item active">Registrasi Ujian</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <form action="/RegistrasiUjian/save" method="POST" class="user" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="p-20">
                                                        <div class="form-group">
                                                            <label>No. Reg. Ujian</label>
                                                            <input type="text" placeholder="No. Reg Ujian" class="form-control <?= ($validation->hasError('no_reg_ujian'))? 'is-invalid' : ''; ?>" id="no_reg_ujian" name="no_reg_ujian" value="<?php $date= date('YmdHis'); echo($date);?>" readonly>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('no_reg_ujian'); ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" placeholder="Isi '-' jika di kosongkan"  class="form-control <?= ($validation->hasError('nik'))? 'is-invalid' : ''; ?>" id="nik" name="nik" value="<?= old('nik'); ?>" autofocus>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('nik'); ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>NIP</label>
                                                            <input type="text" placeholder="NIP"  class="form-control <?= ($validation->hasError('nip'))? 'is-invalid' : ''; ?>" id="nip" name="nip" value="<?= old('nip'); ?>">
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('nip'); ?>
                                                            </div>
                                                        </div>                                                   

                                                        <div class="form-group">
                                                            <label>Nama Peserta</label>
                                                            <input type="text" placeholder="Nama Peserta"  class="form-control <?= ($validation->hasError('nama_peserta'))? 'is-invalid' : ''; ?>" id="nama_peserta" name="nama_peserta" value="<?= old('nama_peserta'); ?>">
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('nama_peserta'); ?>
                                                            </div>
                                                        </div>    

                                                        <div class="form-group">
                                                        <fieldset class="form-group">
                                                        <div class="row">
                                                            <label>Jenis Kelamin</label>
                                                            <div class="col-sm-10">
                                                            <div class="form-check">
                                                            <input class="form-check-input <?= ($validation->hasError('jenis_kelamin'))? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" checked>
                                                            <label class="form-check-label" for="jenis_kelamin">
                                                              Laki-Laki
                                                            </label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input <?= ($validation->hasError('jenis_kelamin'))? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                                                              <label class="form-check-label" for="jenis_kelamin">
                                                                Perempuan
                                                              </label>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </fieldset>
                                                    </div>                                             

                                            <div class="form-group">
                                                            <label>Tempat Lahir</label>
                                                            <input type="text" placeholder="Tempat Lahir"  class="form-control <?= ($validation->hasError('tempat_lahir'))? 'is-invalid' : ''; ?>" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('tempat_lahir'); ?>
                                                            </div>
                                                        </div>  

                                            <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir'))? 'is-invalid' : ''; ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= old('tanggal_lahir'); ?>">
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('tanggal_lahir'); ?>
                                                            </div>
                                                        </div> 
                                                        
                                                        <div class="form-group">
                                                            <label>Pin Registrasi</label>
                                                            <input type="text" class="form-control <?= ($validation->hasError('pin_reg'))? 'is-invalid' : ''; ?>" id="pin_reg" name="pin_reg" value="<?php $mt_rand = mt_rand(100000, 999999); echo $mt_rand; ?>" readonly>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('pin_reg'); ?>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="p-20">
                                                        <div class="form-group">
                                                            <label>Kode Test</label>
                                                                <select class="form-control <?= ($validation->hasError('kode_test'))? 'is-invalid' : ''; ?>"  id="kode_test" name="kode_test">
                                                                 <option>Select</option>
                                                                    <?php foreach($jenisTest as $jt) : ?>
                                                                  <option>
                                                                    <?= $jt['id']; ?> - <?= $jt['nama_test']; ?>
                                                                  </option>
                                                                    <?php endforeach;?>                   
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('kode_test'); ?>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Jenis Test</label>
                                                            <select class="form-control <?= ($validation->hasError('jenis_test'))? 'is-invalid' : ''; ?>" id="jenis_test" name="jenis_test" >
                                                              <option>No Select</option>
                                                            </select>
                                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                                <?= $validation->getError('jenis_test'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>ID. Bidang Test</label>
                                                                <select class="form-control <?= ($validation->hasError('id_bidang_test'))? 'is-invalid' : ''; ?>"  id="id_bidang_test" name="id_bidang_test">
                                                                    <option>Select</option>
                                                                    <?php foreach($bidangTest as $bt) : ?>
                                                                    <option>
                                                                    <?= $bt['id']; ?> - <?= $bt['bidang_test']; ?>
                                                                    </option>
                                                                    <?php endforeach;?> 
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('id_bidang_test'); ?>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Bidang Test</label>
                                                                <select class="form-control <?= ($validation->hasError('bidang_test'))? 'is-invalid' : ''; ?>" id="bidang_test" name="bidang_test" >
                                                                    <option>No Select</option>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('bidang_test'); ?>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>ID. Sub Bidang Test</label>
                                                                <select class="form-control <?= ($validation->hasError('id_sub_bidang_test'))? 'is-invalid' : ''; ?>" id="id_sub_bidang_test" name="id_sub_bidang_test" >
                                                                    <option>Select</option>
                                                                    <?php foreach($subBidangTest as $bts) : ?>
                                                                    <option>
                                                                    <?= $bts['id']; ?> - <?= $bts['sub_bidang_test']; ?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('id_sub_bidang_test'); ?>
                                                                </div>
                                                        </div>
                                                        <br>

                                                        <div class="form-group">
                                                            <label>Sub Bidang Test</label>
                                                                <select class="form-control <?= ($validation->hasError('sub_bidang_test'))? 'is-invalid' : ''; ?>" id="sub_bidang_test" name="sub_bidang_test" >
                                                                    <option>No Select</option>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('sub_bidang_test'); ?>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>ID. Unit Kerja</label>
                                                                <select class="form-control <?= ($validation->hasError('id_unit_kerja'))? 'is-invalid' : ''; ?>" id="id_unit_kerja" name="id_unit_kerja" >
                                                                    <option>Select</option>
                                                                    <?php foreach($unitKerja as $ukj) : ?>
                                                                    <option>
                                                                    <?= $ukj['id']; ?> - <?= $ukj['unit_kerja']; ?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('id_unit_kerja'); ?>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Unit Kerja</label>
                                                                <select class="form-control <?= ($validation->hasError('unit_kerja'))? 'is-invalid' : ''; ?>" id="unit_kerja" name="unit_kerja" >
                                                                    <option>No Select</option>
                                                                </select>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('unit_kerja'); ?>
                                                                </div>
                                                        </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <hr>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Registrasi
                                </button>
                            </form>   
                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

<?= $this->endSection(); ?>