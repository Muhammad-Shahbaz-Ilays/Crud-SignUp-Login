<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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

Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('products/store',[ProductController::class,'store'])->name('products.store');
Route::get('products/showdata',[ProductController::class,'showdata'])->name('products.showdata');
Route::get('products/{id}/edit',[ProductController::class,'edit']);
Route::put('products/{id}/update',[ProductController::class,'update']);
Route::get('products/{id}/delete',[ProductController::class,'destroy']);
Route::post('products/deletedata', [ProductController::class, 'deletedata'])->name('products.deletedata');


Route::group(['middleware'=>'guest'],function(){
    
    Route::get('login',[AuthController::class, 'index'])->name('login');
    Route::post('login',[AuthController::class, 'login'])->name('login');

    Route::get('register',[AuthController::class, 'register_view'])->name('register');
    Route::post('register',[AuthController::class, 'register'])->name('register');
});

Route::group(['middleware'=>'auth'],function(){

    Route::get('home',[AuthController::class, 'home'])->name('home');
    Route::get('logout',[AuthController::class, 'logout'])->name('logout');

});

