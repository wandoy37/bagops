<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// =======Menu Profile=======
// This write code...

// =======Menu Layanan=======
// This write code...

// Page Berita
Route::get('/berita', [HomeController::class, 'berita'])->name('home.berita.index');
Route::get('/berita/{slug}', [HomeController::class, 'beritaShow'])->name('home.berita.show');
// Page Contact
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::prefix('auth')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
