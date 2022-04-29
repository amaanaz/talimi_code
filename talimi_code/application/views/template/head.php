<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taleemi | ValueTech</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- jQuery -->
  <script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url('assets/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>preloader/src/css/preloader.css" />
  <script src="<?php echo base_url('assets/'); ?>preloader/src/js/jquery.preloader.min.js"></script>
  <!-- jquery-validation -->
  <script src="<?php echo base_url('assets/'); ?>plugins/jquery-validation/jquery.validate.min.js"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>gravatar/css/gravatar.css" />
  <script src="<?php echo base_url('assets/') ?>gravatar/js/gravatar.js"></script>
  <style>
    .someBlock {
      background: #fff no-repeat 50% 50%;
      background-size: contain;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
      height: 50vh;
      margin: 5vh auto;
      position: relative;
    }
  </style>
  <script>
    function toster(title, type) {
      // type can be any of these : 'success','info','error','warning'
      Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        icon: type,
        title: title
      });
    }

    function preLoader(action) {
      var obj = {},
        someBlock = $('.preLoaderClass');
      if (action === "start") {
        someBlock.preloader({
          text: "Loading data... Please wait...",
          percent: 100
        });
      } else {
        someBlock.preloader('remove');
      }
    }
  </script>
</head>