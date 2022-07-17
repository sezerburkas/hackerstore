<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Public Routes
Route::POST('/register', [RegisterController::class, 'register']);
Route::POST('/login', [LoginController::class, 'login']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {

    Route::POST('/logout', [LoginController::class, 'logoutAPI']);

    Route::resources([
        'products' => ProductController::class
    ]);

    

});



//Override to make public
Route::GET('/products', [ProductController::class, 'index']);
Route::GET('/products/{product}', [ProductController::class, 'show']);
