<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'loginPage']);
Route::post('/loginProcess', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/home', [ProductController::class, 'showHome']);

Route::group(['middleware' => 'adminMiddleware'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('user/userControl', [UserController::class, 'showAll']);
    Route::get('user/createView', [UserController::class, 'createView']);
    Route::post('user/createUser', [UserController::class, 'createUser']);
    Route::post('user/updateUser/{id_user}', [UserController::class, 'updateUser']);
    Route::get('user/deleteUser/{id_user}', [UserController::class, 'deleteUser']);
    Route::get('user/{user:id}', [UserController::class, 'detailUser']);

});

