<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\controllers\Auth\Locale;

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
    return view('welcome');
});
Route::post('/locale', [Locale::class])->name('locale.store');
Route::get('register', [Register::class, 'create'])->name('register');
// Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.store');
Route::post('register', [Register::class, 'store'])->name('register.store');
Route::get('login', [Login::class, 'create'])->name('login');
Route::post('login', [Login::class, 'store'])->name('login.store');
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('product/{product}/edit', [ProductController::class, 'show']);
Route::put('product/{product}', [ProductController::class, 'update']);
Route::delete('delete/{product}', [ProductController::class, 'destroy']);
// Route::post('postformdata',[PostFormDataController::class,'postData']);
// Route::post('logout',[Logout::class,'signout']);
Route::post('logout',[LogoutController::class,'signout'])->name('logout');
// Route::post('logout',[App\Http\controllers\Auth\LogoutController::class,'signout'])->name('logout');
