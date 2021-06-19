<?php
if(isset($_SESSION["mulai_waktu"])){
 $telah_berlalu = time() - $_SESSION["mulai_waktu"];
 }
else {
 $_SESSION["mulai_waktu"] = time();
 $telah_berlalu = 0;
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/datepicker.css">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico">

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

      <!-- Custom fonts for this template-->
      <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- PICK ONE OF THE STYLES BELOW -->
	<!-- <link href="css/classic.css" rel="stylesheet"> -->
	<!-- <link href="css/corporate.css" rel="stylesheet"> -->
	<!-- <link href="css/modern.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
<style>
.btn-group-xs > .btn, .btn-xs {
  padding: .50rem .4rem;
  font-size: .875rem;
  line-height: .5;
  border-radius: .2rem;
}
</style>
    <title><?= $title; ?></title>
  </head>


  <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/Auth/dashboard">
            <div class="sidebar-brand-icon rotate-n-10">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="sidebar-brand-text mx-2"><sup>Computer Assisted Test</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link">                    
                    <i>
                    <span>Ujian : <?= $jenisTest['nama_test']; ?></span>
                    </i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" >
                <input type="text" id="noRegUjian" name="noRegUjian" value="<?= $dataUjianBy['no_reg_ujian']; ?>" hidden>
                    <span>No. Reg : <?= $dataUjianBy['no_reg_ujian']; ?></span><br>
                    <span>NIP/NIK : <?= $dataUjianBy['nik']; ?> / <?= $dataUjianBy['nip']; ?></span><br>                    
                    <span>Nama : <?= $dataUjianBy['nama_peserta']; ?></span><br>
                    <span>Tempat Lahir : <?= $dataUjianBy['tempat_lahir']; ?></span><br>
                    <span>Tanggal Lahir : <?= $dataUjianBy['tanggal_lahir']; ?></span><br>
                    <span>Jenis Kelamin : <?= $dataUjianBy['jenis_kelamin']; ?></span><br>
                    <input type="text" id="waktu_ujian" nama="waktu_ujian" value="<?= $config['waktu_ujian']; ?>" hidden>
                    <input type="text" id="telah_berlalu" nama="telah_berlalu" value="<?= $telah_berlalu; ?>" hidden>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link">
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/Auth/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div class="input-group">
                            <span class="mr-2 d-none d-lg-inline text-gray-600"><b><label for="jumlahSoal" class="btn btn-primary">Jumlah Soal : <i class="col-sm-4 col-form-label"><?= $countJmlSoal; ?></i></label></b></span>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"><label for="soalDijawab" class="btn btn-success">Soal Dijawab : <i class="col-sm-4 col-form-label"><?= $countJawab; ?></i></label></span>
                                
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"><label for="sisaSoal" class="btn btn-danger">Sisa Soal : <i class="col-sm-4 col-form-label"><?= $countJmlSoal-$countJawab; ?></i></label></span>
                                
                            </a>
                        </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->
    
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $dataUjianBy['nama_peserta']; ?> Sedang Ujian</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="row">
                    <div class="col-lg-8">
                                                <div class="p-20">
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="/Ujian/ujian/<?= $dataUjianBy['no_reg_ujian']; ?>;updateUjian" method="POST" enctype="multipart/form-data">
                             <?= csrf_field(); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php $i=1; $a= $pageSoal;?>
                                <?php if ($a==$detailUjian[$countSoal-1]['no']){
                                    $a = $countSoal-1;
                                }?>
                                <input type="text" id="id" name="id" value="<?= $detailUjian[$a]['id']; ?>" hidden>

                                <input type="text" id="pageSoal" name="pageSoal" value="<?= $a; ?>" hidden>
                                <input type="text" id="jawabanBenar" name="jawabanBenar" value="<?= $detailUjianSoal[$a]['jawaban_benar']; ?>" hidden>
                                <input type="text" id="pointSoal" name="pointSoal" value="<?= $detailUjianSoal[$a]['point_soal']; ?>" hidden>
                                
                                    <thead>
                                        <tr>
                                            <th><?= $detailUjianSoal[$a]['jenis_soal']; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                    <tr>
                                      <td scope="row"><?= $a+1; ?>. <?= $detailUjianSoal[$a]['soal']; ?></td>
                                    </tr>
                                    <tr>
                                      <td>
                                      <?php                                 
                                       //pecah string berdasarkan string "," 
                                       $jawabanTampil = explode(";", $detailUjianSoal[$a]['jawaban']);
                                       //mencari element array 0
                                       $jawabanTampil = $jawabanTampil;
                                       foreach ($jawabanTampil as $jawabanTampil) {
                                        if($jawabanTampil == $detailUjianSoal[$a]['jawab']){
                                            $check = "checked";                                            
                                        }else{
                                            $check = "";
                                        }
                                        echo "<input type='radio' name='jawabanRadio' id='jawabanRadio".$jawabanTampil."' value='".$jawabanTampil."' ".$check.">
                                        <label for='jawabanRadio".$jawabanTampil."'>".$jawabanTampil."</label>";
                                        echo "<br>";                                        
                                    } 
                                    
                                       //tampilkan hasil pemecahan
                                       ?>                                         
                                       </td>
                                    </tr>   
                                    <tr>
                                            <th>
                                                <button type="submit" class="btn btn-primary">
                                                    <i>Simpan & Lanjutkan ></i>
                                                </button>
                                            </th>
                                        </tr> 
                                    </tbody>
                                </table>
                                </form>                                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                                                <div class="p-20">
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th><br><h3><b style="color: red;"><p style="text-align: center;" id="waktuUjian"></p></b></h3></th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                    <tr>
                                      <td scope="row">Keterangan</td>
                                    </tr>
                                    <tr>
                                      <td>
                                             <!-- Nav Item - Utilities Collapse Menu -->
                                            <i class="btn btn-success small"></i><span> Dijawab</span><br>
                                            <i class="btn btn-danger small"></i><span> Belum Dijawab</span>
                                       </td>
                                    </tr>   
                                    
                                    </tbody>
                                </table>
                                <div style="overflow-y: scroll;">
                                                <a class="nav-link collapsed" aria-expanded="true" aria-controls="collapseTwo">
                                                <table>  
                                                <tr>                                                  
                                                    <?php for ($i = 0; $i < $countSoal; $i++){ ?>                                                    
                                                        <form action="/Ujian/ujian/<?= $dataUjianBy['no_reg_ujian']; ?>;pindahPages" method="POST" enctype="multipart/form-data">
                                                         <?= csrf_field(); ?>                                                         
                                                            <td><input type="text" id="countSoal" name="countSoal" value="<?= $i+1 ?>" hidden></td>
                                                            <?php if ($detailUjianSoal[$i]['jawab']!=null) :?>
                                                                <td><button type="submit" class="btn btn-success btn-xs"><?= $i+1 ?></button></td>
                                                            <?php else :?>
                                                                <td><button type="submit" class="btn btn-danger btn-xs"><?= $i+1 ?></button></td>
                                                            <?php endif; ?>
                                                        </form>                                                        
                                                    <?php } ?>
                                                    </tr>
                                                    </table>
                                                </a>      
                                </div>     
                                          
            <!-- Divider -->
            <hr class="sidebar-divider">   

            <form action="/Ujian/selesaiUjian/<?= $dataUjianBy['no_reg_ujian']; ?>" method="POST" enctype="multipart/form-data">
             <?= csrf_field(); ?>
             <!-- Nav Item - Utilities Collapse Menu -->
            
             <input type="text" id="id_ujian" name="id_ujian" value="<?= $ujianData['id']; ?>" hidden>
            <input type="text" id="jumlahSoal" name="jumlahSoal" value="<?= $countJmlSoal; ?>" hidden>
            <input type="text" id="soalDijawab" name="soalDijawab" value="<?= $countJawab; ?>" hidden>
            <input type="text" id="sisaSoal" name="sisaSoal" value="<?= $countJmlSoal-$countJawab; ?>" hidden>
            <input type="text" id="sum_point_soal" name="sum_point_soal" value="<?= $sumPointSoal; ?>" hidden>
            <input type="text" id="selesai_ujian" name="selesai_ujian" value="<?= $telah_berlalu; ?>" hidden>

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="/Ujian/selesaiUjian/<?= $dataUjianBy['no_reg_ujian']; ?>" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Selesai Ujian</span>
                </a>
                
            </li> -->
            <li class="nav">
            <a class="nav-link collapsed">
                <button type="button" name="btnbtn" id="btnbtn" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#myModal"><i class="fas fa-stop-circle lg" style="color:white"> Selesai Ujian</i></button>
                                        
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="free123" aria-hidden="true" style="color:black" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="free123">Perhatian!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            Apakah anda yakin untuk Menyelesaikan Ujian?

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Ya</button>
            </div>
          </div>
        </div>
      </div>
            </a>
            </li>

            </form>

             <!-- Divider -->
            <!-- <hr class="sidebar-divider">                                      -->
                            </div>
                        </div>
                        </div>
                        </div>
                                                            </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; 2021 - <?= date("Y");?> (3jayaCode & AstaCode)</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

	<script>
		$(function() {
			// Datatables basic
			$("#datatables-basic").DataTable({
				responsive: true
			});
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
			// Datatables with Multiselect
			var datatablesMulti = $("#datatables-multi").DataTable({
				responsive: true,
				select: {
					style: "multi"
				}
			});
		});
	</script>

    <script src="<?= base_url(); ?>/js/countDown.js"></script>

    <script type="text/javascript">
      function previewImage(){
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.img-preview');

        // preview image
        const fileImage = new FileReader();
        fileImage.readAsDataURL(image.files[0]);

        fileImage.onload = function(e){
        imagePreview.src = e.target.result;
        } 
      }

      $(document).ready(function(){
 
 $('#id_bidang_test').change(function(){ 
     var id = $("#id_bidang_test").val();

     $.ajax({
         url : "<?php echo site_url('/Sample/bidangTest');?>",
         method : "POST",
         data : {id: id},
         async : true,
         dataType : 'json',
         success: function(data){
             var html = '';
             html += '<option value='+data.id+'>'+data.bidang_test+'</option>';             
             $('#bidang_test').html(html);
         }
     });
     return false;
 }); 
});

$(document).ready(function(){
$('#kode_test').change(function(){ 
     var id = $("#kode_test").val();

     $.ajax({
         url : "<?php echo site_url('/Sample/jenisTest');?>",
         method : "POST",
         data : {id: id},
         async : true,
         dataType : 'json',
         success: function(data){
             var html = '';
             html += '<option value='+data.id+'>'+data.nama_test+'</option>';             
             $('#jenis_test').html(html);
         }
     });
     return false;
 }); 
});

$(document).ready(function(){
$('#id_sub_bidang_test').change(function(){ 
     var id = $("#id_sub_bidang_test").val();

     $.ajax({
         url : "<?php echo site_url('/Sample/subBidangTest');?>",
         method : "POST",
         data : {id: id},
         async : true,
         dataType : 'json',
         success: function(data){
             var html = '';
             html += '<option value='+data.id+'>'+data.sub_bidang_test+'</option>';             
             $('#sub_bidang_test').html(html);
         }
     });
     return false;
 }); 
});

$('#tanggal_lahir').datepicker({
		format: 'yyyy-mm-dd',
		daysOfWeekDisabled: "0",
		autoclose:true
    });

function waktuHabis(){
 alert("selesai dikerjakan ......");
 }
function hampirHabis(periods){
 if($.countdown.periodsToSeconds(periods) == 60){
 $(this).css({color:"red"});
 }
 }
$(function(){
 var waktu = 180; // 3 menit
 var sisa_waktu = waktu - <?php echo $telah_berlalu ?>;
 var longWayOff = sisa_waktu;
 $("#waktuUjian").countdown({
 until: longWayOff,
 compact:true,
 onExpiry:waktuHabis,
 onTick: hampirHabis
 });
 })
    </script>
  </body>
</html>