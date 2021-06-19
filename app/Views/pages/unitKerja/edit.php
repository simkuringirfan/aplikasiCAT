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
                                    <h4 class="page-title">Form Edit Unit Kerja</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Unit Kerja</a></li>
                                        <li class="breadcrumb-item active">Edit Unit Kerja</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <form action="/UnitKerja/ubah/<?= $unitKerja['id']; ?>" method="POST" class="user" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="id" class="col-sm-2 col-form-label">Id</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $unitKerja['id']; ?>" type="text"
                                                 placeholder="Id" readonly>
                                                 <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('id'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="unit_kerja" class="col-sm-2 col-form-label">Unit Kerja</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('unit_kerja'))? 'is-invalid' : ''; ?>" id="unit_kerja" name="unit_kerja" value="<?= old('unit_kerja') ? old('unit_kerja') : $unitKerja['unit_kerja'] ?>" type="text"
                                                 placeholder="Unit Kerja" autofocus>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('unit_kerja'); ?>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <hr>
                                    <button type="submit" class="btn btn-warning waves-effect waves-light">
                                        Ubah
                                    </button>
                                    <a href="/UnitKerja/unitKerja" class="btn btn-danger waves-effect waves-light">Batal</a>                                
                            </form>   

                            </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

<?= $this->endSection(); ?>