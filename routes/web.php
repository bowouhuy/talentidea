<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/* USER */
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\JasaController;
use App\Http\Controllers\user\InvoiceController;
/* ADMIN */
use App\Http\Controllers\admin\DashboardController;

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
//     return view('welcome');
// });

/* ROUTE USER */
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/jasa/{subkategori_id?}', [JasaController::class, 'index']);
    Route::get('/jasa/detail/{jasa_id}', [JasaController::class, 'show']);
    Route::get('/jasa/invoice/{paket_id}', [InvoiceController::class, 'index']);
    // Route::get('/invoice/{transaksi_id}', [InvoiceController::class, 'show']);
    Route::post('/invoice/store', [InvoiceController::class, 'store']);
    // Route::post('/invoice/delete_files', [InvoiceController::class, 'delete_files']);
    Route::get('/invoice/delete_files/{filename}', [InvoiceController::class, 'delete_files']);
});

/* ROUTE ADMIN */
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

/* ROUTE AUTH */
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);