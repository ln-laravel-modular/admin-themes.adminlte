<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix(module_env('ROUTE_PREFIX'))->group(function () {
  $module = [
    'module_env' => module_env(),
    'module_config' => module_config()
  ];

  // Route::get('/', 'Modules\\' . str_replace('-', '_', module_env('NAME'))  . '\App\Http\Controllers\Controller@view_index');
  Route::get('/', function (Request $request) use ($module) {
    return view('adminlte.index', $module);
  });
  foreach (['index2', 'index3', 'calendar', 'gallery', 'iframe', 'iframe-dark', 'kanban', 'widgets'] as $path) {
    Route::get('/' . $path, function (Request $request) use ($path, $module) {
      return view('adminlte.' . $path, $module);
    });
  }

  Route::prefix('charts')->group(function () use ($module) {
    foreach (['chartjs', 'flot', 'inline', 'uplot'] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.charts.' . $path, $module);
      });
    }
  });

  Route::prefix('examples')->group(function () use ($module) {
    foreach (['404', '500', 'blank', 'contact-us', 'contacts', 'e-commerce', 'faq', 'forgot-password-v2', 'forgot-password', 'invoice-print', 'invoice', 'language-menu', 'legacy-user-menu', 'lockscreen', 'login-v2', 'login', 'pace', 'profile', 'project-add', 'project-detail', 'project-detail', 'project-edit', 'projects', 'recover-password-v2', 'recover-password', 'register-v2', 'register', 'starter',] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.examples.' . $path, $module);
      });
    }
  });
  Route::prefix('forms')->group(function () use ($module) {
    foreach (['advanced', 'editors', 'general', 'validation'] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.forms.' . $path, $module);
      });
    }
  });
  Route::prefix('layout')->group(function () use ($module) {
    foreach (['boxed', 'collapsed-sidebar', 'fixed-footer', 'fixed-sidebar-custom', 'fixed-sidebar', 'fixed-topnav', 'top-nav-sidebar', 'top-nav'] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.layout.' . $path, $module);
      });
    }
  });
  Route::prefix('mailbox')->group(function () use ($module) {
    foreach (['compose', 'mailbox', 'read-mail'] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.mailbox.' . $path, $module);
      });
    }
  });
  Route::prefix('search')->group(function () use ($module) {
    foreach (['enhanced-results', 'enhanced', 'simple-result', 'simple'] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.search.' . $path, $module);
      });
    }
  });
  Route::prefix('tables')->group(function () use ($module) {
    foreach (['data', 'jsgrid', 'simple'] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.tables.' . $path, $module);
      });
    }
  });
  Route::prefix('ui')->group(function () use ($module) {
    foreach (['buttons', 'general', 'modals', 'navbar', 'ribbons', 'sliders', 'timeline', 'icons'] as $path) {
      Route::get('/' . $path, function (Request $request) use ($path, $module) {
        return view('adminlte.ui.' . $path, $module);
      });
    }
  });
});