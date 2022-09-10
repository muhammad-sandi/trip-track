<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;

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

// login register
Route::get('/', function () {
    return view('login-regis.login');
});
Route::get('/register', function () {
    return view('login-regis.register');
});


// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});


// viewcatatan
route::get('/catatan', [CatatanController::class, 'index'])->name('catatan');
