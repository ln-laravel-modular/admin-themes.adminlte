@extends('adminlte._layout.main')

@section('styles')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/fontawesome-free/css/all.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/adminlte.min.css">
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>jsGrid</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">jsGrid</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">jsGrid</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="jsGrid1"></div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
@endsection


@section('scripts')
  <!-- jQuery -->
  <script src="/modules/adminlte/public/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/modules/adminlte/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jsGrid -->
  <script src="/modules/adminlte/public/vendor/jsgrid/demos/db.js"></script>
  <script src="/modules/adminlte/public/vendor/jsgrid/jsgrid.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/modules/adminlte/public/vendor/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/modules/adminlte/public/vendor/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",

        sorting: true,
        paging: true,

        data: db.clients,

        fields: [{
            name: "Name",
            type: "text",
            width: 150
          },
          {
            name: "Age",
            type: "number",
            width: 50
          },
          {
            name: "Address",
            type: "text",
            width: 200
          },
          {
            name: "Country",
            type: "select",
            items: db.countries,
            valueField: "Id",
            textField: "Name"
          },
          {
            name: "Married",
            type: "checkbox",
            title: "Is Married"
          }
        ]
      });
    });
  </script>
@endsection
