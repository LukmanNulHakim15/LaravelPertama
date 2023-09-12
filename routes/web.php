<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

#Penamaan Route Berfungsi jika kita ingin mengubah endpoint dan endpoint tersebut digunakan banyak
#Daripada satu persatu gunakanlah name route contoh dibawah
Route::get('/crud', [CrudController::class, 'jajalTambahkan'])->name('cr.d');
Route::post('/crud/simpan',[CrudController::class, 'simpanData'])->name('cr.simpan');

#ini Route Standar
// Route::get('/crud', [CrudController::class, 'jajalTambahkan']);

Route::get('/', function () {
    return view('index');
});


// Route::get('home', function () {
//     return "Laravel Pertama";
// });

#Route Mengambil nilai dari link
// Route::get('users/{id}', function ($id) {
//     return "Ini Id Kamu danu".$id;
// });

#Route langsung ke view
// Route::view('/welcome', 'welcome');

#Route Redirect, bacanya: jika ke link "/" maka akan di giring ke link "/home"
// Route::redirect('/', '/home');

#Jika ingin menggunakan dua method dalam rotes
// Route::match(['get','post'],'/home', function () {
//     return "Laravel Pertama";
// });
