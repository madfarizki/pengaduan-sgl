<?php

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

Route::get('/', [\App\Http\Controllers\User\UserController::class, 'index']);

Route::get('/pengaduan',  [\App\Http\Controllers\User\UserController::class, 'pengaduan'])->name('pengaduan');
Route::post('/pengaduan/kirim',  [\App\Http\Controllers\User\UserController::class, 'storePengaduan'])->name('pengaduan.store');

Route::get('/login',  [\App\Http\Controllers\User\UserController::class, 'masuk']);
Route::get('/register',  [\App\Http\Controllers\User\UserController::class, 'daftar']);
Route::get('/tentang',  [\App\Http\Controllers\User\UserController::class, 'tentang']);

Route::middleware(['guest'])->group(function () {
    // Login Masyarakat
    Route::get('/login',  [\App\Http\Controllers\User\UserController::class, 'masuk'])->name('user.masuk');
    Route::post('/login/auth', [\App\Http\Controllers\User\UserController::class, 'login'])->name('user.login');

    // Register
    // Route::get('/daftar', [UserController::class, 'daftar'])->name('pekat.daftar');
    // Route::post('/register/auth', [UserController::class, 'register'])->name('pekat.register');
});

Route::middleware(['isMasyarakat'])->group(function () {
     // Logout Masyarakat
     Route::get('/logout', [\App\Http\Controllers\User\UserController::class, 'logout'])->name('user.logout');
});


Route::prefix('admin')->group( function() {
    Route::middleware('isAdmin')->group( function() {
       Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

       Route::resource('/petugas', \App\Http\Controllers\Admin\PetugasController::class);
       Route::resource('/masyarakat', \App\Http\Controllers\Admin\MasyarakatController::class);
    });

    Route::middleware('isPetugas')->group( function() {
        // Pengaduan
        Route::get('pengaduan/{status}', [\App\Http\Controllers\Admin\PengaduanController::class, 'index'])->name('pengaduan.index');
        Route::get('pengaduan/show/{id_pengaduan}', [\App\Http\Controllers\Admin\PengaduanController::class, 'show'])->name('pengaduan.show');
        Route::delete('pengaduan/delete/{id_pengaduan}', [\App\Http\Controllers\Admin\PengaduanController::class, 'destroy'])->name('pengaduan.delete');

        // Tanggapan
        Route::post('tanggapan', [\App\Http\Controllers\Admin\TanggapanController::class, 'response'])->name('tanggapan');

        // Kategori
        Route::resource('kategori', \App\Http\Controllers\Admin\KategoriController::class);

        Route::get('/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');
     });


    Route::middleware(['isGuest'])->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'formLogin'])->name('admin.masuk');
        Route::post('/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login');
    });
});


// Route::get('/admin', function () {
//     return view('pages.admin.dashboard');
// });
