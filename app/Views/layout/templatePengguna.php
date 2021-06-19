<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Selamat Datang</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico">

        <link href="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?= base_url(); ?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        
        <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">

  </head>
  <body>
    
    <?= $this->renderSection('content');?>

  <!-- Optional JavaScript; choose one of the two! -->
<!-- jQuery  -->
        <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/metismenu.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url(); ?>/assets/js/waves.min.js"></script>

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
  </body>
</html>