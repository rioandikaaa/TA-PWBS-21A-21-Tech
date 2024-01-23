<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kia;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kia/get', [Mahasiswa::class,'getController']);

// buat route untuk pencarian
Route::get('kia/search/{keyword}', [kia::class,'searchController']);

//buat route untuk detail
Route::get('kia/detail/{id}', [kia::class,'detailController']);

//buat route untuk delete
Route::delete('kia/delete/{id}', [kia::class,'deleteController']);

//buat route untuk simpan data
Route::post('kia/save', [kia::class,'saveController']);

//buat route untuk ubah data
Route::put('kia/update/{id}', [kia::class,'updateController']);

