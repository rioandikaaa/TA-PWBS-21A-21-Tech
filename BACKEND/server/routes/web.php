<?php
use App\Http\Controllers\KiaController;

// ...

// Endpoint untuk menampilkan semua data anak
Route::get('/data_anak', [KiaController::class, 'index']);

// Endpoint untuk mencari data anak berdasarkan keyword
Route::get('/data_anak/search/{keyword}', [KiaController::class, 'search']);