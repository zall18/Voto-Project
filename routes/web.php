<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
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
    Route::get('product/suspend/{id}', [ProductController::class, 'suspendProduct']);
    Route::get('product/recovery/{id}', [ProductController::class, 'recoveryProduct']);

    //Order Route

    Route::get('order/orderControl', [OrderController::class, 'showAll']);
    Route::get('order/{order:id}', [OrderController::class, 'detailOrder']);

    //Category Route
    Route::get('category/categoryControl', [CategoryController::class, 'index']);
    Route::get('category/delete/{id}', [CategoryController::class, 'delete']);

    Route::get('/logout', [AuthController::class, 'logout']);

});

// Unauthorize User Route

Route::get('/loginCustomer', [UserController::class, 'loginCustomerPage']);
Route::post('/loginCustomer/proccess', [AuthController::class, 'loginCustomer']);
Route::get('/shopUnauthorize', [ProductController::class, 'shopUnauthorize']);

Route::group(['middleware' => 'customerLogin'], function () {

    // Home Route
    Route::get('/home', [ProductController::class, 'showHome']);

    // Shop Route
    Route::get('/shop', [ProductController::class, 'shop']);

    // User Profile Route
    Route::get('/me', [UserController::class, 'me']);
    Route::get('/user/product/createView', [ProductController::class, 'productCreateView']);
    Route::post('/user/product/create', [ProductController::class, 'productCreate']);

    // Detail Product
    Route::get('/productDetail/{product:id}', [ProductController::class, 'productDetail']);

    // Cart Route
    Route::get('/cart/create/{id}', [CartController::class, 'addCart']);
    Route::post('/cart/create/detail/{id}', [CartController::class, 'addCartDetail']);
    Route::get('/cart', [CartController::class, 'cart']);
    Route::get('/cart/remove/{id}', [CartController::class, 'remove']);

    // Checkout Route
    Route::post('/checkout', [OrderController::class, 'checkout']);
    Route::post('/checkout/process', [OrderController::class, 'checkoutProcess']);

    // Authorize Logout
    Route::get('/logoutCustomer', [AuthController::class, 'logoutCustomer']);
});


