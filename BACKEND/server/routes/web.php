<?php
use App\Http\Controllers\KiaController;

// ...

// Endpoint untuk menampilkan semua data anak
Route::get('/data_anak', [KiaController::class, 'index']);