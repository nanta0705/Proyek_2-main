<?php

use App\Http\Controllers\Admin\DataClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!re
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/admin/dashboard', [AppController::class, 'admin']);
// Route::get('/admin/daftar_akun_client', function () {
//     return view('admin.pages.akun_client');
// });
Route::resource('/admin/data_client', DataClientController::class);

Route::get('/owner/dashboard', [AppController::class, 'owner']);
Route::get('/client/dashboard', [AppController::class, 'client']);

Route::get('/logout', [LoginController::class, 'logout']);
