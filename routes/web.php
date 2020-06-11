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

// Welcome
Route::get('/', 'WelcomeController@index')->name('/');

// Home
Route::get('/home', 'HomeController@index')->name('home');

/* Authentication */
Auth::routes();

// Ketentuan Tulisan
Route::get('ketentuan-tulisan', 'KetentuanTulisanController@index');

// Tentang Kami
Route::get('tentang-kami', 'TentangKamiController@index')->name('tentang-kami');

// Artikel
Route::get('artikel', 'ArtikelController@artikel')->name('artikel');

// Hasil Pencarian 
Route::get('hasil-pencarian', 'PencarianController@hasilPencarian')->name('hasil-pencarian');

// Komen
Route::post('komen', 'KomenController@store')->name('komen.store');

// Kategori
Route::get('kategori',  'KategoriController@kategori')->name('kategori');
Route::get('sub_kategori', 'KategoriController@sub_kategori')->name('sub_kategori');

/* Proteksi Auth */
Route::group(['middleware' => ['auth']], function () {
    // Profil
    Route::get('profil', 'ProfilController@index')->name('profil');

    // Kirim Tulisan
    Route::get('kirim-tulisan', 'ArtikelController@index')->name('kirim-tulisan');
    Route::post('kirim-tulisan', 'ArtikelController@tambah_artikel')->name('kirim-tulisan.tambah');
});
