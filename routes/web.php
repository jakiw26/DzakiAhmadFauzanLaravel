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
// add
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
// edit
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
// delete
Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);

Route::get('/produk', [ProdukController::class,'index']);
Route::get('/showproduk', [ProdukController::class,'show']);
Route::get('/viewproduk', [ProdukController::class,'view']);

