<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/perkembangan', [AuthController::class, 'perkembangan']);
Route::post('/pakan', [AuthController::class, 'pakan']);
Route::post('/kesehatan', [AuthController::class, 'kesehatan']);
Route::post('/penjualan', [AuthController::class, 'penjualan']);

//Route DOC 
Route::get('/doc', [DocController::class, 'index']); // Menampilkan semua dokumen
Route::post('/doc', [DocController::class, 'store']); // Menyimpan dokumen baru
Route::get('/doc/{id}', [DocController::class, 'show']); // Menampilkan detail dokumen berdasarkan ID
Route::put('/doc/{id}', [DocController::class, 'update']); // Memperbarui dokumen berdasarkan ID
Route::delete('/doc/{id}', [DocController::class, 'destroy']); // Menghapus dokumen berdasarkan ID


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
