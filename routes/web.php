<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

// login
Route::get('/', [CatatanController::class, 'index']);

// register
Route::get('/register', [LoginController::class, 'register'])->name('register');

// profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// catatan perjalanan
Route::get('/catatan', [CatatanController::class, 'index'])->name('viewcatatan');

Route::get('/catatan/addcatatan', [CatatanController::class, 'create'])->name('addcatatan');
Route::post('/insertcatatan', [CatatanController::class, 'store'])->name('insertcatatan');

Route::get('/catatan/editcatatan/{id}', [CatatanController::class, 'edit'])->name('editcatatan');
Route::post('/updatecatatan/{id}', [CatatanController::class, 'update'])->name('updatecatatan');

Route::get('deletecatatan/{id}', [CatatanController::class, 'destroy'])->name('deletecatatan');

// tabel user
Route::get('/user', [UserController::class, 'index'])->name('viewuser');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
