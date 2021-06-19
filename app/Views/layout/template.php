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
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->


    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Selamat Datang</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico">

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/morris/morris.css">

        <!-- DataTables -->
        <link href="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?= base_url(); ?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">

	<!-- PICK ONE OF THE STYLES BELOW -->
	<!-- <link href="css/classic.css" rel="stylesheet"> -->
	<!-- <link href="css/corporate.css" rel="stylesheet"> -->
	<!-- <link href="css/modern.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->

    <title><?= $title; ?></title>
  </head>


  <body>

    <?= $this->include('layout/header'); ?>
    
    <?= $this->include('layout/navbar'); ?>
    
    <?= $this->renderSection('content');?>

    <?= $this->include('layout/footer'); ?>

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

    <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/metismenu.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url(); ?>/assets/js/waves.min.js"></script>

            <!--Morris Chart-->
    <script src="<?= base_url(); ?>/assets/plugins/morris/morris.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/raphael/raphael.min.js"></script>

    <script src="<?= base_url(); ?>/assets/pages/dashboard.init.js"></script>

            <!-- Required datatable js -->
        <script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url(); ?>/assets/pages/datatables.init.js"></script> 

<!-- App js -->
        <script src="<?= base_url(); ?>/assets/js/app.js"></script>
        <script src="<?= base_url(); ?>/js/addInput.js"></script>

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

$(document).ready(function(){
$('#id_unit_kerja').change(function(){ 
     var id = $("#id_unit_kerja").val();

     $.ajax({
         url : "<?php echo site_url('/Sample/unitKerja');?>",
         method : "POST",
         data : {id: id},
         async : true,
         dataType : 'json',
         success: function(data){
             var html = '';
             html += '<option value='+data.id+'>'+data.unit_kerja+'</option>';             
             $('#unit_kerja').html(html);
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

    function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
 
      return false;
    return true;
  }

    </script>
  </body>
</html>