<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('index');
});

Route::get('/faq', [FaqController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/layanan', [LaporanController::class, 'index'])->middleware('auth');
Route::post('/laporan',[LaporanController::class, 'store']);

Route::get('/riwayat', [LaporanController::class, 'dashboard'])->middleware('auth');

Route::get('/laporan/{laporan:id}', [LaporanController::class, 'show'])->middleware('auth');
Route::post('/laporan/delete/{laporan:id}', [LaporanController::class, 'destroy']);
Route::put('/laporan/{laporan:id}', [LaporanController::class, 'update']);

// routes for authenticating
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
