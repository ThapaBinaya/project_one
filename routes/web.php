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

//Route::get('/', function () {return view('welcome');});

//Route::get('/index', function () {return view('frontend/index');});

//Route::get('/', function () {return view('frontend.index');});



Route::get('/index', function () {return view('admin.index');});

Route::resource('slider', \App\Http\Controllers\Admin\SliderController::class);
Route::resource('about', \App\Http\Controllers\Admin\AboutsController::class);

//Route::resource('/siteSetting',\App\Http\Controllers\Admin\SiteSettingController::class);

Route::resource('user', \App\Http\Controllers\Admin\UserController::class);

Route::get('siteSetting',                       [\App\Http\Controllers\Admin\SiteSettingController::class, 'edit'])->name('siteSetting.edit');
Route::post('siteSetting/update',               [\App\Http\Controllers\Admin\SiteSettingController::class, 'update'])->name('siteSetting.update');

Route::resource('/blog', \App\Http\Controllers\Admin\BlogController::class);

Route::resource('/menu', \App\Http\Controllers\Admin\MenuController::class);

Route::resource('/contact', \App\Http\Controllers\Admin\ContactController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Frontend.....................

Route::get('/',           [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('frontend/index');

Route::get('/front/blog',           [\App\Http\Controllers\Front\HomeController::class, 'blog'])->name('frontend/blog');

Route::get('/front/aboutUs',           [\App\Http\Controllers\Front\HomeController::class, 'aboutUs'])->name('frontend/aboutUs');

Route::get('/front/contact',           [\App\Http\Controllers\Front\HomeController::class, 'contact'])->name('frontend/contact');

//Route::get('/front/contact', function () {return view('frontend/contact');});
