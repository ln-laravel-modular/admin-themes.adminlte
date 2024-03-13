@extends('adminlte::layouts.body', [
    'bodyClass' => 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed',
])

@section('main')
  <div class="wrapper">
    {{-- @section('preloader') @include('adminlte::layouts.preloader') @show --}}
    @section('navbar') @include('adminlte::layouts.navbar') @show
    @section('sidebar') @include('adminlte::layouts.sidebar') @show
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ $config['menu_actives'][0]['title'] ?? 'Dashboard' }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                @foreach ($config['menu_actives'] ?? [] as $menu_item)
                  @if ($loop->last)
                    <li class="breadcrumb-item active">{{ $menu_item['title'] }}</li>
                  @else
                    <li class="breadcrumb-item"><a href="{{ $menu_item['path'] }}">{{ $menu_item['title'] }}</a></li>
                  @endif
                @endforeach
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      @section('content') @show
    </div>
    <!-- /.content-wrapper -->
    @section('footer') @include('adminlte::shared.footer') @show
    @section('control-sidebar') @include('adminlte::layouts.control-sidebar') @show
  </div>
@endsection
