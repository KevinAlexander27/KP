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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/', function () {
//     return view('test');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login','maincontroller@login');
Route::post('/login','maincontroller@proses');

// <!--===============================================================================================-->	
// user site

Route::get('/user_home', function () {
    return view('user/user_home');
});

Route::get('/user_inputnilai', function () {
    return view('user/user_inputnilai');
});

Route::get('/user_view', function () {
    return view('user/user_view');
});

// <!--===============================================================================================-->	
// admin site

Route::get('/admin_home', function () {
    return view('admin/admin_home');
});

Route::get('/admin_guru', function () {
    return view('admin/admin_guru');
});

Route::get('/admin_guru_new', function () {
    return view('admin/admin_guru_new');
});

// Route::get('/admin_guru_old', function () {
//     return view('admin/admin_guru_old');
// });

Route::get('/admin_siswa', function () {
    return view('admin/admin_siswa');
});

Route::get('/admin_kelas', function () {
    return view('admin/admin_kelas');
});

Route::get('/admin_kelas_new', function () {
    return view('admin/admin_kelas_new');
});

// Route::get('/admin_kelas_old', function () {
//     return view('admin/admin_kelas_old');
// });

Route::get('/admin_pelajaran', function () {
    return view('admin/admin_pelajaran');
});

// Route::get('/admin_pelajaran_old', function () {
//     return view('admin/admin_pelajaran_old');
// });

Route::get('/admin_pelajaran_new', function () {
    return view('admin/admin_pelajaran_new');
});

Route::get('/admin_nilai', function () {
    return view('admin/admin_nilai');
});

// Route::get('/admin_periodeinput', function () {
//     return view('admin/admin_periodeinput');
// });
// <!--===============================================================================================-->
Route::get('/admin_periodeinput','admincontroller@periodeinput');
Route::post('/periodeinput','admincontroller@cperiodeinput');
Route::get('/dperiodeinput','admincontroller@dperiodeinput');
Route::post('/newguru','admincontroller@newguru');
Route::post('/newkelas','admincontroller@newkelas');
Route::post('/newpelajaran','admincontroller@newpelajaran');
Route::get('/admin_guru_old','admincontroller@guru_old');
Route::get('/admin_pelajaran_old','admincontroller@pelajaran_old');
Route::get('/admin_kelas_old','admincontroller@kelas_old');
// <!--===============================================================================================-->
Route::post('/eguru','admincontroller@guru_edit');
Route::get('/admin_guru_edit','admincontroller@guru_edit_page');
Route::get('/editguru/{guru}','admincontroller@eguru');
// <!--===============================================================================================-->	
Route::get('/','maincontroller@home');
// <!--===============================================================================================-->	
Route::get('/deleteguru/{guru}','admincontroller@dguru');
Route::get('/deletepelajaran/{pelajaran}','admincontroller@dpelajaran');
Route::get('/deletekelas/{kelas}','admincontroller@dkelas');