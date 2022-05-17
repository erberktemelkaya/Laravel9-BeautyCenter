<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminServiceController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ImageController;

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
//**********************HOME PAGE ROUTES**********************/
Route::get('/',[HomeController::class,'index'])->name(name:'home');
Route::get('/about',[HomeController::class,'about'])->name(name:'about');
Route::get('/references',[HomeController::class,'references'])->name(name:'references');
Route::get('/contact',[HomeController::class,'contact'])->name(name:'contact');

Route::get('/service/{id}',[HomeController::class,'service'])->name(name:'service');
Route::get('/categoryservices/{id}/{slug}',[HomeController::class,'categoryservices'])->name(name:'categoryservices');;

Route::get('/deneme',[TestController::class,'deneme']);

Route::prefix('admin')->name('admin.')->group(function () {

Route::get('/',[AdminHomeController::class,'index'])->name(name:'index');
//**********************GENERAL SERVICES ROUTES**********************/
Route::get('/setting',[AdminHomeController::class,'setting'])->name(name:'setting');
Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name(name:'setting.update');

//**********************ADMIN SERVICES ROUTES**********************/
Route::prefix('/service')->name('service.')->controller(AdminServiceController::class)->group(function () {

    Route::get('/','index')->name(name:'index');
    Route::get('/create','create')->name(name:'create');
    Route::post('/store','store')->name(name:'store');
    Route::get('/edit/{id}','edit')->name(name:'edit');
    Route::post('/update/{id}','update')->name(name:'update');
    Route::get('/show/{id}','show')->name(name:'show');
    Route::get('/delete/{id}','destroy')->name(name:'delete');
    });
    
//**********************ADMIN CATEGORY ROUTES**********************/
Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {

Route::get('/','index')->name(name:'index');
Route::get('/create','create')->name(name:'create');
Route::post('/store','store')->name(name:'store');
Route::get('/edit/{id}','edit')->name(name:'edit');
Route::post('/update/{id}','update')->name(name:'update');
Route::get('/show/{id}','show')->name(name:'show');
Route::get('/delete/{id}','destroy')->name(name:'delete');
    });
    //**********************ADMIN SERVICE IMAGE GALLERY ROUTES**********************/
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {

    Route::get('/{pid}','index')->name(name:'index');
    Route::post('/store/{pid}','store')->name(name:'store');
    Route::post('/update/{pid}/{id}','update')->name(name:'update');
    Route::get('/delete/{pid}/{id}','destroy')->name(name:'delete');
        
});


});