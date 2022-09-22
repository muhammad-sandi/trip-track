<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashuserController;
use App\Http\Controllers\CatatanuserController;

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
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');

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

Route::get('/user', [UserController::class, 'index'])->name('viewuser')->middleware('checkRole:admin');

Route::get('/user/edituser/{id}', [UserController::class, 'edit'])->name('edituser');
Route::post('/updateuser/{id}', [UserController::class, 'update'])->name('updateuser');

Route::get('/deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser')->middleware('checkRole:admin');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// // ?? tampilan user

// // !! dashbaord
// Route::get('/dashuser', [DashuserController::class, 'index'])->name('dashuser');

// // !! catatan
// Route::get('/usercatatan', [CatatanuserController::class, 'index'])->name('usercatatan');

// Route::get('/usercatatan/useradd', [CatatanuserController::class, 'create'])->name('useradd');
// Route::post('/userinsert', [CatatanuserController::class, 'store'])->name('userinsert');

// Route::get('/usercatatan/useredit/{id}', [CatatanuserController::class, 'edit'])->name('useredit');
// Route::post('/userupdate/{id}', [CatatanuserController::class, 'update'])->name('userupdate');

// // ?? end tampilan user
