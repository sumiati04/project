<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TipeController;
use App\Models\Perumahan;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PromoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test-admin', function () {
    return view('layouts.admin');
});

Route::get('/index', function () {
    return view('backend.index');
});

Route::get('/hallo', function () {
    return view('hallo');
});

Route::get('/login1', function () {
    return view('frontend.login1');
});

Route::get('/regiter1', function () {
    return view('frontend.register1');
});

Route::get('/beranda', function () {
    $datas = Perumahan::all();
    return view('frontend.beranda', compact('datas'));
});

Route::get('/rumah1', function () {
    return view('frontend.rumah1');
});

Route::get('/rumah2', function () {
    return view('frontend.rumah2');
});

Route::get('/rumah3', function () {
    return view('frontend.rumah3');
});

Route::get('/rumah4', function () {
    return view('frontend.rumah4');
});

Route::get('/rumah5', function () {
    return view('frontend.rumah5');
});

Route::get('/promo1', function () {
    return view('frontend.promo1');
});

Route::get('/forminfo', function () {
    return view('frontend.forminfo');
});

Route::get('/formpromo', function () {
    return view('frontend.formpromo');
});

Route::resource('tipe', TipeController::class);

Route::resource('perumahan', PerumahanController::class);

Route::resource('pemesanan', PemesananController::class);

Route::resource('promo', PromoController::class);
