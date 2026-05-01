<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/tes', function () {
    return view('tes');
});

Route::get('/user/{id}', function ($id) {
    return "profil user dengan id:".$id;
});

// Route::get('/produk/{slug?}', function ($slug = 'semua-produk') {
//     return "Menampilkan:".$slug;
// });

Route::get('/guweh', function () {
    return 'Dzaki Ahmad Fauzan';
});
Route::get('/guweh', function () {
    return 'Dzaki Ahmad Fauzan';
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/produk', [ProdukController::class,'index']);
Route::get('/showproduk', [ProdukController::class,'show']);
Route::get('/viewproduk', [ProdukController::class,'view']);
