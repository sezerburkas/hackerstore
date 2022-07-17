<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('index');
})->name('index');

Route::get('/login', function(){
    if(Auth::check()){
        return redirect()->route('index');
    }
    return view('auth.login');
})->name('login');

Route::get('/register', function(){
    if(Auth::check()){
        return redirect()->route('index');
    }
    return view('auth.register');
})->name('register');

Route::POST('/auth', [LoginController::class, 'login'])->name('auth');

Route::POST('/create', [RegisterController::class, 'register'])->name('create');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cart', function(){
    return view('pages.cart');
})->name('cart');

Route::middleware(['auth', 'user-access:user'])->group( function (){
    Route::get('/myAccount', [MainController::class, 'myAccount'])->name('myaccount');
});

