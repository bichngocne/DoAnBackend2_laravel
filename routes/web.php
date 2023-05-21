<?php

use App\Http\Controllers\Admin\CouponController;
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
//update trạng thái đơn hàng
Route::post('update-status/{id}',[OrderController::class,'updateStatus'])->name('updateStatus');
Route::get('cancel-order/{order_id}',[OrderController::class,'cancel_order'])->name('cancel_order');
//Hiển thị danh sách khuyến mại
Route::get('list-coupon',[CouponController::class,'list_coupon'])->name('list_coupon');
