<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\UserController;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/jadwal-tayang', [HomeController::class, 'jadwal_tayang'])->name('jadwal_tayang');
Route::get('/katalog-anime', [HomeController::class, 'katalog_anime'])->name('katalog_anime');
Route::get('/riwayat-menonton', [HomeController::class, 'riwayat_menonton'])->name('riwayat_menonton');
Route::get('/subscribed-anime', [HomeController::class, 'subscribed_anime'])->name('subscribed_anime');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/pengaturan', [HomeController::class, 'pengaturan'])->name('pengaturan');
Route::get('/tampilan', [HomeController::class, 'tampilan'])->name('tampilan');

// Users
Route::get('/akun', [UserController::class, 'index'])->name('akun');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}/delete-banner', [UserController::class, 'deleteBanner'])->name('user.delete-banner');
Route::delete('/user/{id}/delete-avatar', [UserController::class, 'deleteAvatar'])->name('user.delete-avatar');

