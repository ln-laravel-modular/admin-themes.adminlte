@extends('adminlte::_layouts.body', [
    'bodyClass' => 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed',
])

@section('main')
  <div class="wrapper">
    @section('preloader') @include('adminlte::_layouts.preloader') @show
    @section('navbar') @include('adminlte::_layouts.navbar') @show
    @section('sidebar') @include('adminlte::_layouts.sidebar') @show
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @section('content') @show
    </div>
    <!-- /.content-wrapper -->
    @section('footer') @include('adminlte::_layouts.footer') @show
    @section('control-sidebar') @include('adminlte::_layouts.control-sidebar') @show
  </div>
@endsection
