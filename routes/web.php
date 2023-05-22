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
//in hóa đơn
Route::get('print-order/{order_id}',[OrderController::class,'print_order'])->name('print_order');
//Hiển thị danh sách khuyến mại
Route::get('list-coupon',[CouponController::class,'list_coupon'])->name('list_coupon');
//Hiển thị thêm khuyến mại
Route::get('insert-coupon',[CouponController::class,'insert_coupon'])->name('insert_coupon');
//Thêm khuyến mại
Route::post('add-coupon',[CouponController::class,'insert_coupon_code'])->name('insert_coupon_code');
//Xóa khuyến mại 
Route::get('delete-coupon/{coupon_id}',[CouponController::class,'delete_coupon'])->name('delete_coupon');
