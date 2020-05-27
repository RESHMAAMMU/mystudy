<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('user-login');
Route::get('register', [AuthController::class, 'register'])->name('register.user');
Route::get('home', [HomeController::class, 'homeScreen'])->name('home.page');
Route::post('create', [AuthController::class, 'create'])->name('user-create');
Route::get('show/{id}', [AuthController::class, 'show'])->name('user-show');
Route::get('list/all',[AdminController::class,'list'])->name('list-all');
Route::get('list',[AdminController::class,'datatable'])->name('list-datatable');
Route::get('edit/{id}',[AuthController::class,'edit'])->name('user-edit');
Route::post('update/{id}',[AuthController::class,'update'])->name('user-update');
Route::get('logout',[LoginController::class,'logout'])->name('logout');