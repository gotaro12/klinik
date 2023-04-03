<?php

use App\Http\Controllers\Admin\KonsultasiController;
use App\Http\Controllers\Admin\SuratController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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
Route::get('login', [LoginController::class,'login'])->name('login');
Route::post('actionLogin',[LoginController::class,'actionLogin'])->name('actionLogin');
Route::get('actionLogout',[LoginController::class,'actionLogout'])->name('actionLogout');
Route::prefix('admin')->middleware('auth')->group( function()
{
    Route::resource('surat',SuratController::class);
    Route::resource('konsultasi', KonsultasiController::class);
});
// Route::get('admin/surat',[SuratController::class,'index']);
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('alur', [HomeController::class,'alur'])->name('alur');
Route::get('surat', [HomeController::class,'surat'])->name('surat');
Route::get('surat/{id}/download', [HomeController::class,'download'])->name('surat.download');
Route::get('konsul',[HomeController::class,'konsultasi'])->name('konsul');
Route::get('umum',[HomeController::class,'umum'])->name('umum');
Route::post('umum',[HomeController::class,'store'])->name('konsul.store');
