<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [AuthController::class, 'Unauthorize']);
Route::get('/loginAdmin', [AuthController::class, 'loginPage']);
Route::post('/loginProcess', [AuthController::class, 'login']);

Route::group(['middleware' => 'adminMiddleware'], function () {

    //User Route

    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('user/userControl', [UserController::class, 'showAll']);
    Route::get('user/createView', [UserController::class, 'createView']);
    Route::post('user/createUser', [UserController::class, 'createUser']);
    Route::post('user/updateUser/{id_user}', [UserController::class, 'updateUser']);
    Route::get('user/deleteUser/{id_user}', [UserController::class, 'deleteUser']);
    Route::get('user/{user:id}', [UserController::class, 'detailUser']);

    //Product Route

    Route::get('product/productControl', [ProductController::class, 'showAll']);
    Route::get('product/{product:id}', [ProductController::class, 'detailProduct']);

    //Order Route

    Route::get('order/orderControl', [OrderController::class, 'showAll']);
    Route::get('order/{order:id}', [OrderController::class, 'detailOrder']);

    Route::get('/logout', [AuthController::class, 'logout']);

});

Route::get('/loginCustomer', [UserController::class, 'loginCustomerPage']);
Route::post('/loginCustomer/proccess', [AuthController::class, 'loginCustomer']);

Route::group(['middleware' => 'customerLogin'], function () {
    Route::get('/home', [ProductController::class, 'showHome']);
    Route::get('/cart/create/{id}', [CartController::class, 'addCart']);
    Route::get('/cart', [CartController::class, 'cart']);
    Route::get('/cart/remove/{id}', [CartController::class, 'remove']);
    Route::post('/checkout', [OrderController::class, 'checkout']);
    Route::post('/checkout/process', [OrderController::class, 'checkoutProcess']);
    Route::get('/logoutCustomer', [AuthController::class, 'logoutCustomer']);
});


