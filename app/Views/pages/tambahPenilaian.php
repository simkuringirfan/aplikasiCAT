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
                                    <h4 class="page-title">Form Tambah Penilaian</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ujian</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hasil Ujian CAT Plus</a></li>
                                        <li class="breadcrumb-item active">Tambah Penilaian</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <form action="/Ujian/updatePenilaian/<?= $tambahPenilaian['no_reg_ujian']; ?>" method="POST" class="user" enctype="multipart/form-data">
                                       <?= csrf_field(); ?>
                                       <input class="form-control" id="id" name="id" value="<?= $tambahPenilaian['id'] ?>" type="text" hidden>
                                       <div class="form-group row">
                                            <label for="no_reg_ujian" class="col-sm-2 col-form-label">No Reg Ujian</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('no_reg_ujian'))? 'is-invalid' : ''; ?>" id="no_reg_ujian" name="no_reg_ujian" value="<?= old('no_reg_ujian') ? old('no_reg_ujian') : $tambahPenilaian['no_reg_ujian'] ?>" type="text"
                                                placeholder="No Reg Ujian" disabled>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('no_reg_ujian'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label for="nilai_tambah" class="col-sm-2 col-form-label">Penilaian</label>
                                            <div class="col-sm-10">
                                                <table class="table table-sm table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Perihal Test</th>
                                                            <th>Point Nilai</th>
                                                            <th>#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="formtambah" class="formtambah">
                                                    <input id="idf" value="1" type="hidden">
                                                        <tr>
                                                            <td>
                                                                <input class="form-control <?= ($validation->hasError('perihal_test[]'))? 'is-invalid' : ''; ?>" id="perihal_test[]" name="perihal_test[]" type="text"
                                                                placeholder="Perihal Test" autofocus>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('perihal_test[]'); ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input class="form-control <?= ($validation->hasError('point_nilai[]'))? 'is-invalid' : ''; ?>" id="point_nilai[]" name="point_nilai[]" type="text"
                                                                placeholder="Point Nilai" autofocus>
                                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                                    <?= $validation->getError('point_nilai[]'); ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button id="btnaddform" name="btnaddform" type="button" class="btn btn-primary btnaddform" onclick="tambahInput(); return false;">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    
                                        <hr>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Tambah Penilaian
                                </button>
                                <a href="/Ujian/hasilUjianCATPlus" class="btn btn-danger waves-effect waves-light">Batal</a>

                            </form>   

                            </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

<?= $this->endSection(); ?>
