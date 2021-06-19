<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-left">
    <div class="col-md-6">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-2">
                            <div class="text-left">
                                <h1 class="h3 mb-2 text-gray-800">Form Edit Jawaban</h1>
                            </div>
                            <hr>
                            <form action="/Jawaban/ubah/<?= $jawaban['id']; ?>" method="POST" class="user" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                              <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $jawaban['id']; ?>"
                                        placeholder="Id" readonly>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('id'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                 <div class="col-sm-10">
                                  <select class="form-control <?= ($validation->hasError('id_soal'))? 'is-invalid' : ''; ?>" id="id_soal" name="id_soal">
                                  <option><?= old('id_soal') ? old('id_soal') : $jawaban['id_soal'] ?></option>
                                  <?php foreach($soal as $b) : ?>
                                  <option>
                                  <?= $b['id']; ?>-<?= $b['soal']; ?>
                                  </option>
                                  <?php endforeach;?>
                                  </select>
                                  <div id="validationServer03Feedback" class="invalid-feedback">
                                      <?= $validation->getError('id_soal'); ?>
                                  </div>
                                  </div>
                                  </div>
                               <div class="form-group">
                                    <textarea type="text" class="form-control form-control-user <?= ($validation->hasError('jawaban'))? 'is-invalid' : ''; ?>" id="jawaban" name="jawaban" value="<?= old('jawaban') ? old('jawaban') : $jawaban['jawaban'] ?>"
                                        placeholder="Jawaban" autofocus></textarea>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('jawaban'); ?>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <button type="submit" class="btn btn-warning btn-user btn-block">
                                    <h6><i class="far fa-save fa-lg"></i> Ubah<h6>
                                </button>
                                <a href="/Jawaban/jawaban" class="btn btn-danger btn-user btn-block"><i class="far fa-window-close fa-lg"></i> Batal</a>
                            </form>
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