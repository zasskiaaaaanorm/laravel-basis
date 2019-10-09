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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/siswa', function (){
//     return 'selamat datang...';
// });

// Route::get('/karyawan', function (){
//     return 'sembarang';
// });

// Route::get('/guru', function (){
//     return 'selamat datang guru';
// });

// Route::get('/siswa/{id}', function ($id) {
//     return ' selamat datang ' .$id;
// });

// Route::get('karyawan/{parameter?}', function($parameter=null){
//     return 'selamat datang karyawan '.$parameter;
// });

// Route::get('/home', function(){
//     return view('home');
// });

// Route::get('/admin', function(){
//     return redirect('/home');
// });

// Route::get('/Pegawai', 'PegawaiController@index');

// Route::get('/pelajar', function(){
//     return 'Hallo';
// });

// Route::get('/nama/{id}', function($id){
//     return 'Selamat Sore '.$id;
// });

// Route::get('hewan/{parameter?}', function($parameter=null){
//     return 'serigala '.$parameter;
// });

// Route::get('/buah', function(){
//     return view('buah');
// });

// Route::get('/saya', function(){
//     return redirect('buah');
// });

Route::get('/Makanan', 'MakananController@index');

Route::get('/Sekolah', 'SekolahController@index');

Route::get('/Buah', 'BuahController@index');

Route::get('/Hewan', 'HewanController@index');

Route::get('/Profil', 'ProfilController@index');
