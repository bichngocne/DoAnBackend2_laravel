<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryProductController;
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