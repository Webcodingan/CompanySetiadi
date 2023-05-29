<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Kategori;

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
    return view('frontend.layouts');
});

Route::get('about', function () {
    return view('frontend.about');
});

Route::get('contact', function () {
    return view('frontend.contact');
});

Route::get('opening', function () {
    return view('frontend.opening');
});

Route::get('service', function () {
    return view('frontend.service');
});

Auth::routes(['register'=>false]);

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::resource('inputberita', 'BeritaController')->middleware('auth');

Route::get('/artikel', function () {
    $beritas = Berita::latest()->first()->get();
    return view('frontend.berita', compact('beritas'));
});

Route::get('detail/{id}', function ($id) {
    $beritas = Berita::find($id);
    return view('frontend.detailberita', compact('beritas'));
});

Route::get('category/{id}', function ($id) {
    $categorys = Kategori::find($id);
    return view('frontend.detailartikel', compact('categorys'));
});

Route::resource('kategori', 'KategoriController')->middleware('auth');

Route::resource('kontak', 'KontakController');

Route::resource('profile', 'ProfileController')->middleware('auth');
