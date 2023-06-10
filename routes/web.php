<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SemuaProdukController;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukKategoriController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('layout.home');
});

// Route dashboard
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rute untuk menampilkan halaman login
Route::get('/login', [AuthController::class, 'index'])->name('login');

// Rute untuk menangani proses login
Route::post('/actLogin', [AuthController::class, 'actLogin'])->name('login.submit');

// Logout
Route::get('/logout', [AuthController::class, 'actLogout'])->name('logout');

// semua produk
Route::resource('semua-produk', SemuaProdukController::class);

// Route resource
Route::group(['middleware' => 'auth'], function() {
    Route::resource('dashboard', DashboardController::class)->middleware('role:Admin,Staff');
    Route::get('dashboard/konfirmasi/{id}', [DashboardController::class, 'konfirmasi'])->name('dashboard.konfirmasi');

    Route::resource('users', UsersController::class)->middleware('role:Admin,Staff,User');
    Route::resource('role', RoleController::class)->middleware('role:Admin,Staff');
    Route::resource('produk', ProdukController::class)->middleware('role:Admin,Staff,User');
    Route::get('produk/konfirmasi/{id}', [ProdukController::class, 'konfirmasi'])->name('produk.konfirmasi');
    Route::resource('produkkategori', ProdukKategoriController::class)->middleware('role:Admin,Staff');
});
// Route::resource('/users', UsersController::class);

// Route::post('/users/add', [UsersController::class, 'store'])->name('store');

// Route::get('/users/add', [UsersController::class, 'create'])->name('users.create');


// Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

