<?php

use App\Http\Controllers\Admin\CategoryProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\User\CartController;
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
Route::group(['prefix' => 'category'], function(){
    //show list product by category
    Route::resource('categoryProduct', CategoryProductController::class);

});
// group cart
Route::group(['prefix' => 'cart'], function(){
    Route::resource('carts',CartController::class);
    Route::post('deleteProduct',[CartController::class,'destroy'])->name('carts.destroy');
});
