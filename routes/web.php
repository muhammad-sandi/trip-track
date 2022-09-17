<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\LoginController;

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

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// login
Route::get('/', [LoginController::class, 'login'])->name('login');


// register
Route::get('/register', [LoginController::class, 'register'])->name('register');


// viewcatatan
Route::get('/catatan', [CatatanController::class, 'catatan'])->name('catatan');


// viewuser

