<?php
use App\Http\Controllers\KiaController;

// ...

// Endpoint untuk menampilkan semua data anak
Route::get('/data_anak', [KiaController::class, 'index']);

// Endpoint untuk mencari data anak berdasarkan keyword
Route::get('/data_anak/search/{keyword}', [KiaController::class, 'search']);

// Endpoint untuk menampilkan detail data anak berdasarkan nomer_antri
Route::get('/data_anak/{nomer_antri}', [KiaController::class, 'show']);
Route::get('/data_anak', [KiaController::class, 'index']);
Route::get('/data_anak/search/{keyword}', [KiaController::class, 'search']);
Route::get('/data_anak/show/{nomer_antri}', [KiaController::class, 'show']);