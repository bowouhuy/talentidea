<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/* HELPER */
use App\Http\Controllers\HelperController;
/* USER */
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\JasaController;
use App\Http\Controllers\user\InvoiceController;
/* ADMIN */
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JasaController as AdminJasaController;

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
    Route::get('profile', [HomeController::class, 'profile']);
    Route::prefix('jasa')->group(function () {
        Route::post('{subkategori_id?}', [JasaController::class, 'index']);
        Route::get('{subkategori_id?}', [JasaController::class, 'index']);
        Route::get('detail/{jasa_id}', [JasaController::class, 'show']);
        Route::get('invoice/{paket_id}', [InvoiceController::class, 'index'])->middleware('auth');
    });
    Route::prefix('invoice')->group(function () {
        Route::post('store', [InvoiceController::class, 'store']);
        Route::get('delete_files/{filename}', [InvoiceController::class, 'delete_files']);
    });
});

/* ROUTE ADMIN */
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::prefix('jasa')->group(function () {
        Route::get('/', [AdminJasaController::class, 'index']);
        Route::get('list', [AdminJasaController::class, 'list']);
        Route::get('form_jasa/{jasa_id?}', [AdminJasaController::class, 'form_jasa']);
        Route::post('form_jasa_store', [AdminJasaController::class, 'form_jasa_store']);
        Route::get('form_images/{jasa_id}', [AdminJasaController::class, 'form_images']);
        Route::post('form_images_store', [AdminJasaController::class, 'form_images_store']);
        Route::get('form_paket/{jasa_id}', [AdminJasaController::class, 'form_paket']);
        Route::post('form_paket_store', [AdminJasaController::class, 'form_paket_store']);
        Route::get('delete_files/{filename}', [AdminJasaController::class, 'delete_files']);
        Route::get('delete_jasa/{jasa_id}', [AdminJasaController::class, 'delete_jasa']);
        Route::get('delete_paket/{paket_id}', [AdminJasaController::class, 'delete_paket']);
    });
});

/* ROUTE AUTH */
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::post('loginUser', [AuthController::class, 'loginUser']);
Route::post('createUser', [AuthController::class, 'createUser']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

/* ROUTE HELPER */
Route::prefix('helper')->group(function () {
    Route::get('get_subkategori/{kategori_id}/{subkategori_id?}', [HelperController::class, 'get_subkategori']);
    Route::get('get_paket/{paket_id}', [HelperController::class, 'get_paket']);
    Route::get('get_jasa_images/{jasa_id}', [HelperController::class, 'get_jasa_images']);
});