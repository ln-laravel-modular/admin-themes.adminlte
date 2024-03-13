<?php

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

use Nwidart\Modules\Laravel\Module;

Route::prefix('adminlte')->group(function () {
    Route::get('/', function (Request $request) {
        return view('adminlte::index', ['config' => Module::currentConfig()]);
    });


    foreach (['index2', 'index3', 'calendar', 'gallery', 'iframe', 'iframe-dark', 'kanban', 'widgets'] as $path) {
        Route::get('/' . $path, function (Request $request) use ($path) {
            return view('adminlte::' . $path, ['config' => Module::currentConfig()]);
        });
    }

    Route::prefix('charts')->group(function () {
        foreach (['chartjs', 'flot', 'inline', 'uplot'] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::charts.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });

    Route::prefix('examples')->group(function () {
        foreach (['404', '500', 'blank', 'contact-us', 'contacts', 'e-commerce', 'faq', 'forgot-password-v2', 'forgot-password', 'invoice-print', 'invoice', 'language-menu', 'legacy-user-menu', 'lockscreen', 'login-v2', 'login', 'pace', 'profile', 'project-add', 'project-detail', 'project-detail', 'project-edit', 'projects', 'recover-password-v2', 'recover-password', 'register-v2', 'register', 'starter',] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::examples.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });
    Route::prefix('forms')->group(function () {
        foreach (['advanced', 'editors', 'general', 'validation'] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::forms.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });
    Route::prefix('layout')->group(function () {
        foreach (['boxed', 'collapsed-sidebar', 'fixed-footer', 'fixed-sidebar-custom', 'fixed-sidebar', 'fixed-topnav', 'top-nav-sidebar', 'top-nav'] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::layout.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });
    Route::prefix('mailbox')->group(function () {
        foreach (['compose', 'mailbox', 'read-mail'] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::mailbox.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });
    Route::prefix('search')->group(function () {
        foreach (['enhanced-results', 'enhanced', 'simple-result', 'simple'] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::search.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });
    Route::prefix('tables')->group(function () {
        foreach (['data', 'jsgrid', 'simple'] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::tables.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });
    Route::prefix('ui')->group(function () {
        foreach (['buttons', 'general', 'modals', 'navbar', 'ribbons', 'sliders', 'timeline', 'icons'] as $path) {
            Route::get('/' . $path, function (Request $request) use ($path) {
                return view('adminlte::ui.' . $path, ['config' => Module::currentConfig()]);
            });
        }
    });
});
