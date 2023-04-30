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

Route::get('/', 'FrontController@index');

Route::get('/kontak', function () {
    return view('pages.kontak');
});
Route::post('/kontak/add_sarkom','FrontController@add_sarkom');

Route::get('/tentang_kami', function () {
    return view('pages.tentang_kami');
});


Route::get('/galeri', 'FrontController@galeri');

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

// Dashboard
Route::get('/admin/dashboard', 'HomeController@admin');

// Sarkom
Route::get('/admin/sarkom', 'HomeController@sarkom');

// Galeri
Route::get('/admin/manage_galeri', 'HomeController@galeri');
Route::get('/admin/tambah_foto','HomeController@add_foto');
Route::post('/admin/add_foto/upload','HomeController@upload_foto');
Route::get('/admin/hapus_galeri/{id}','HomeController@delete_foto');
Route::get('/admin/manage_galeri/edit_galeri/{id}','HomeController@edit_foto');
Route::post('/admin/edit_foto/update','HomeController@update_foto');
