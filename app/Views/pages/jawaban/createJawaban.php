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
                                        <h1 class="h4 text-gray-900 mb-4">Form Tambah Jawaban</h1>
                                    </div>
																		
                                    <form action="/Jawaban/save" method="POST" class="user" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                             <div class="form-group">
                                  <select class="form-control  <?= ($validation->hasError('id_soal'))? 'is-invalid' : ''; ?>" id="id_soal" name="id_soal" >
                                  <option>--Pilih Soal--</option>
                                  <?php foreach($soal as $so) : ?>
                                  <option>
                                  <?= $so['id']; ?>-<?= $so['soal']; ?>
                                  </option>
                                  <?php endforeach;?>
                                  </select>
                                  <div id="validationServer03Feedback" class="invalid-feedback">
                                      <?= $validation->getError('id_soal'); ?>
                                  </div>
                                  </div>

                                  <div class="form-group">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('jawaban'))? 'is-invalid' : ''; ?>" id="jawaban" name="jawaban" value="<?= old('jawaban'); ?>"
                                            placeholder="Jawaban"></textarea>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('jawaban'); ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                <button type="submit" class="btn btn-primary-outline">
                                    <i class="far fa-save fa-lg"> Simpan</i>
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

<?= $this->endSection(); ?>