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
                                    <h4 class="page-title">Form Tambah Sub Bidang Test</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Bidang Test</a></li>
                                        <li class="breadcrumb-item active">Tambah Sub Bidang Test</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <form action="/SubBidangTest/save" method="POST" class="user" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="sub_bidang_test" class="col-sm-2 col-form-label">Sub Bidang Test</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('sub_bidang_test'))? 'is-invalid' : ''; ?>" type="text" id="sub_bidang_test" name="sub_bidang_test" value="<?= old('sub_bidang_test'); ?>"
                                                placeholder="Sub Bidang Test" autofocus>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('sub_bidang_test'); ?>
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