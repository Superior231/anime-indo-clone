<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

// Users
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/jadwal-tayang', [HomeController::class, 'jadwal_tayang'])->name('jadwal_tayang');
Route::get('/katalog-anime', [HomeController::class, 'katalog_anime'])->name('katalog_anime');
Route::get('/riwayat-menonton', [HomeController::class, 'riwayat_menonton'])->name('riwayat_menonton');
Route::get('/subscribed-anime', [HomeController::class, 'subscribed_anime'])->name('subscribed_anime');
Route::get('/pengaturan', [HomeController::class, 'pengaturan'])->name('pengaturan');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');

