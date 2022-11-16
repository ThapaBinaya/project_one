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

Route::get('/', function () {return view('welcome');});

Route::get('/index', function () {return view('admin/index');});

Route::resource('slider', \App\Http\Controllers\Admin\SliderController::class);
Route::resource('about', \App\Http\Controllers\Admin\AboutsController::class);

//Route::resource('/siteSetting',\App\Http\Controllers\Admin\SiteSettingController::class);

Route::resource('user', \App\Http\Controllers\Admin\UserController::class);

Route::get('siteSetting',                       [\App\Http\Controllers\Admin\SiteSettingController::class, 'edit'])->name('siteSetting.edit');
Route::post('siteSetting/update',               [\App\Http\Controllers\Admin\SiteSettingController::class, 'update'])->name('siteSetting.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
