<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $module_config['title'] }} | Untitled</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="/modules/adminlte/public/vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/modules/adminlte/public/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/summernote/summernote-bs4.min.css">

  @section('styles') @show
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  @section('main')
    <div class="wrapper">
      @section('preloader') @include('adminlte._layout.preloader') @show
      @section('navbar') @include('adminlte._layout.navbar') @show
      @section('sidebar') @include('adminlte._layout.sidebar') @show
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @section('content') @show
      </div>
      <!-- /.content-wrapper -->
      @section('footer') @include('adminlte._layout.footer') @show
      @section('control-sidebar') @include('adminlte._layout.control-sidebar') @show
    </div>
    <!-- ./wrapper -->
  @show
  <!-- jQuery -->
  <script src="/modules/adminlte/public/vendor/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/modules/adminlte/public/vendor/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/modules/adminlte/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/modules/adminlte/public/vendor/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/modules/adminlte/public/vendor/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/modules/adminlte/public/vendor/jqvmap/jquery.vmap.min.js"></script>
  <script src="/modules/adminlte/public/vendor/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/modules/adminlte/public/vendor/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/modules/adminlte/public/vendor/moment/moment.min.js"></script>
  <script src="/modules/adminlte/public/vendor/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/modules/adminlte/public/vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/modules/adminlte/public/vendor/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/modules/adminlte/public/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/modules/adminlte/public/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  {{-- <script src="/modules/adminlte/public/js/demo.js"></script> --}}
  @section('scripts') @show

</body>

</html>
