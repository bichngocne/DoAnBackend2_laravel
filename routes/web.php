<?php

use App\Http\Controllers\Admin\UserCategoryProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\User\UserCartController;
use App\Http\Controllers\User\UserProductController;
use App\Models\User;

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
//group customer
Route::group(['prefix' => 'customer'], function () {
    //login view
    Route::get('/login', [CustomAuthController::class, 'showLogin'])->name('showLogin');
    //login submit
    Route::post('/login-request', [CustomAuthController::class, 'handleLogin'])->name('handleLogin.custom');
    //register view
    Route::get('/register', [CustomAuthController::class, 'showRegister'])->name('showRegister');;
    //register submit
    Route::post('/register-request', [CustomAuthController::class, 'handleRegister'])->name('handleRegister.custom');
    //signout
    Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');
    //change password view
    Route::get('/forget-password', [CustomAuthController::class, 'changePasswordShow'])->name('customer.showChangePassword');
    //change password
    Route::post('/change-password', [CustomAuthController::class, 'editPassword'])->name('customer.changepassword');
    
});
//dashboard
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
//group product type
Route::group(['prefix' => 'usercategory'], function(){
    //show list product by category
    Route::resource('usercategoryProduct', UserCategoryProductController::class);

});
// group cart
Route::group(['prefix' => 'usercart'], function(){
    Route::resource('usercarts',UserCartController::class);
    Route::post('deleteProduct',[UserCartController::class,'destroy'])->name('carts.destroy');
});
// group product
Route::group(['prefix' => 'userproducts'], function () {
    //show product
    Route::resource('userproduct', UserProductController::class);
    //show detail product
    Route::get('/product-detail/{id}', [UserProductController::class, 'show'])->name('showProductDetail');
    Route::post('cart/add', [UserCartController::class, 'store'])->name('cart.add');
});