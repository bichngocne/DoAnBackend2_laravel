<?php

use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

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
//hiển thị đơn hàng
Route::get('manage-order',[OrderController::class,'index'])->name('index');
//Hiển thị chi tiết đơn hàng theo ID
Route::get('view-order/{orderId}',[OrderController::class,'view_order'])->name('view_order');
