<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user
Route::middleware(['auth','user-access:user'])->group(function() {
    Route::get('/home' , [HomeController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('/account' , [HomeController::class, 'account'])->name('account');
    Route::get('/transaksi' , [HomeController::class, 'transaction'])->name('transaksi');
});

//admin
Route::middleware(['auth','user-access:admin'])->group(function() {
    Route::get('/admin/home' , [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
});
