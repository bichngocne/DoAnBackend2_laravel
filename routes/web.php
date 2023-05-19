<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
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
//show Categories
Route::get('show-categories',[CategoryProductController::class,'ListCategroies'])->name("listcategories");
//add Categories
Route::post('add-categories',[CategoryProductController::class,'AddCategories'])->name("addcategories");
//addScreen Categories
Route::get('addScreen-categories',[CategoryProductController::class,'AddScreenCategroies'])->name("addscreencategories");
//edit Categories
Route::post('edit-categories/{id}',[CategoryProductController::class,'EditCategories'])->name("editcategories");
//editScreen Categories
Route::get('editScreen-categories/{id}',[CategoryProductController::class,'EditScreenCategroies'])->name("editscreencategories");
//remove Categories
Route::get('remove-categories/{id}',[CategoryProductController::class,'RemoveCategories'])->name("removecategories");
//seek Categories  
Route::get('seek-category',[CategoryProductController::class,'SeekCategory'])->name("seekcategory");
//show Product
Route::get('show-product',[ProductController::class,'ListProduct'])->name('listProduct');
//addScreen Product
Route::get('addScreen-product',[ProductController::class,'AddScreenProduct'])->name("addscreenproduct");
//add Product
Route::post('add-product',[ProductController::class,'AddProduct'])->name("addproduct");
//editScreen Product
Route::get('editScreen-product/{id}',[ProductController::class,'EditScreenProduct'])->name("editscreenproduct");
//edit Product
Route::post('edit-product/{id}',[ProductController::class,'EditProduct'])->name("editproduct");
//remove Product
Route::get('remove-product/{id}',[ProductController::class,'RemoveProduct'])->name("removeproduct");
//seek Product  
Route::get('seek-product',[ProductController::class,'SeekProduct'])->name("seekproduct");