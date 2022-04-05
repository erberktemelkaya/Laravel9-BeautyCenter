<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[HomeController::class,'index']);

Route::get('/deneme',[TestController::class,'deneme']);



Route::get('/admin',[AdminHomeController::class,'index'])->name(name:'admin');

Route::get('/admin/category',[AdminCategoryController::class,'index'])->name(name:'admin_category');
Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name(name:'admin_category_create');
Route::post('/admin/category/store',[AdminCategoryController::class,'store'])->name(name:'admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name(name:'admin_category_edit');
Route::post('/admin/category/update/{id}',[AdminCategoryController::class,'update'])->name(name:'admin_category_update');
Route::get('/admin/category/show/{id}',[AdminCategoryController::class,'show'])->name(name:'admin_category_show');

