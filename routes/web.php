<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/* USER */
use App\Http\Controllers\user\HomeController;
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
Route::get('/', [HomeController::class, 'index']);

/* ROUTE ADMIN */
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

/* ROUTE AUTH */
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);