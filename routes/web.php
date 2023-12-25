<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [SectionController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/register', [AuthController::class, 'registerStore'])->name('registerPost');

Route::post('/login', [AuthController::class, 'loginStore'])->name('loginPost');

Route::post('/logout', [AuthController::class, 'logout'])->name('login');

Route::group(['middleware'=> ['auth','ceklogin:email,register']], function (){
    route::get('/home',[SectionContoller::class,'index'])->name('home');
});
