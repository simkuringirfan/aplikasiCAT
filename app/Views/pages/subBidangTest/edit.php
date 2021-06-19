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
                                    <h4 class="page-title">Form Edit Sub Bidang Test</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Bidang Test</a></li>
                                        <li class="breadcrumb-item active">Edit Sub Bidang Test</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <form action="/SubBidangTest/ubah/<?= $subBidangTest['id']; ?>" method="POST" class="user" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="id" class="col-sm-2 col-form-label">Id</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('id'))? 'is-invalid' : ''; ?>" id="id" name="id" value="<?= $subBidangTest['id']; ?>" type="text"
                                                 placeholder="Id" readonly>
                                                 <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('id'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sub_bidang_test" class="col-sm-2 col-form-label">Sub Bidang Test</label>
                                            <div class="col-sm-10">
                                                <input class="form-control <?= ($validation->hasError('sub_bidang_test'))? 'is-invalid' : ''; ?>" id="sub_bidang_test" name="sub_bidang_test" value="<?= old('sub_bidang_test') ? old('sub_bidang_test') : $subBidangTest['sub_bidang_test'] ?>" type="text"
                                                 placeholder="Sub Bidang Test" autofocus>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('sub_bidang_test'); ?>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <hr>
                                    <button type="submit" class="btn btn-warning waves-effect waves-light">
                                        Ubah
                                    </button>
                                    <a href="/SubBidangTest/subBidangTest" class="btn btn-danger waves-effect waves-light">Batal</a>                                
                            </form>   

                            </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->      

                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

<?= $this->endSection(); ?>