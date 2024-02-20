@extends('adminlte._layout.main')

@section('styles')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/modules/adminlte/public/vendor/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/modules/adminlte/public/css/adminlte.min.css">
@endsection

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <h2 class="text-center display-4">Search</h2>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <form action="simple-results.html">
            <div class="input-group">
              <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
              <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('scripts')
  <!-- jQuery -->
  <script src="/modules/adminlte/public/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/modules/adminlte/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/modules/adminlte/public/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/modules/adminlte/public/js/demo.js"></script>
@endsection
