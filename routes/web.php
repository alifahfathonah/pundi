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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'WelcomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');

/* Proteksi Auth */
Route::group(['middleware' => ['auth']], function () {

    // Kirim Tulisan
    Route::get('kirim-tulisan', 'ArtikelController@index')->name('kirim-tulisan');
    Route::post('kirim-tulisan', 'ArtikelController@tambah_artikel')->name('kirim-tulisan.tambah');

    // Isi Artikel
    Route::get('artikel', 'ArtikelController@artikel')->name('artikel');

    // Ketentuan Tulisan
    Route::get('/ketentuan-tulisan', function () {
        return view('pages.ketentuan-tulisan');
    });
});
