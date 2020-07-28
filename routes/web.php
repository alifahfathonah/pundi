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

// Diclaimer
Route::get('disclaimer', 'DisclaimerController@index')->name('disclaimer');

// Redaksi
Route::get('redaksi', 'RedaksiController@index')->name('redaksi');

// Media Siber
Route::get('media-siber', 'MediaSiberController@index')->name('media-siber');

// Tentang Kami
Route::get('tentang-kami', 'TentangKamiController@index')->name('tentang-kami');

// Konsultasi 
Route::get('konsultasi', 'KonsultasiController@index')->name('konsultasi');
Route::post('konsultasi/konsultasi_store', 'KonsultasiController@konsultasi_store')->name('konsultasi.konsultasi_store');
Route::post('konsultasi/pertanyaan_store', 'KonsultasiController@pertanyaan_store')->name('konsultasi.pertanyaan_store');

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
    Route::get('edit-profil', 'ProfilController@edit_profil')->name('edit-profil');
    Route::post('edit-profil/update-profil', 'ProfilController@update_profil')->name('edit-profil.update-profil');
    Route::post('edit-profil/update-photo', 'ProfilController@update_photo')->name('edit-profil.update-photo');

    // Kirim Tulisan
    Route::get('kirim-tulisan', 'ArtikelController@tambah_artikel')->name('kirim-tulisan');
    Route::get('kirim-tulisan/subKegiatanByKegiatan/{id}', 'ArtikelController@subKegiatanByKegiatan')->name('kirim-tulisan.subKegiatanByKegiatan');
    Route::post('kirim-tulisan', 'ArtikelController@tambahArtikel_store')->name('kirim-tulisan.tambah');
});
