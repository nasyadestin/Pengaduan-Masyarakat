<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\MasyarakatController;

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
    return view('layouts/register');    
});
Route::get('/register', function () {
    return view('layouts/register');    
});
Route::get('/login', function () {
    return view('layouts/login');    
});
Route::get('/edit-pengaduan', function () {
    return view('pengaduan/edit');    
});

Route::get('/register', [RegisterController::class, 'showRegisterMasyarakat'])->name('register');
Route::post('/register', [RegisterController::class, 'registerMasyarakat']);
Route::get('/login', [LoginController::class, 'showLoginMasyarakat'])->name('login');
Route::post('/login', [LoginController::class, 'LoginMasyarakat']);
Route::get('/petugas/login', [LoginController::class, 'showLoginPetugas'])->name('login.petugas');
Route::post('/petugas/login', [LoginController::class, 'loginPetugas']);
Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');