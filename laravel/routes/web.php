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

// Pages only accessible without auth.

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::get('/register', [MainController::class, 'register'])->name('register');

//Pages accessible with or without auth

Route::get('/cart', [MainController::class, 'cart'])->name('cart');

Route::get('/', [MainController::class, 'index'])->name('index');


// Pages only accessible with auth

Route::middleware(['auth', 'user-access:user'])->group( function (){
    Route::get('/myAccount', [MainController::class, 'myAccount'])->name('myaccount');
});

//API group

/** Auth group
 * This is before I learned restfull API's 
 */
Route::POST('/login', [LoginController::class, 'login']);
Route::POST('/register', [RegisterController::class, 'register']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



