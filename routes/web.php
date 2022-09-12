<?php

use App\Models\todos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\adminController;
use App\Http\Controllers\dataListingsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UpdateController;


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
Route::get('/',[homecontroller::class,'index']);
Route::get('/addnew',[formcontroller::class,'addnew']);
Route::post('/new',[formcontroller::class,'create'])->name('welcome');
Route::get('/delete/{id}',[formcontroller::class,'destroy']);
Route::get('/login',[AuthControllers::class,'login']);
Route::get('/signup',[AuthControllers::class,'rigister']);
Route::Post('/save',[AuthControllers::class,'save'])->name('save');
Route::Post('/check',[AuthControllers::class,'check'])->name('check');
Route::get('/search',[dataListingsController::class,'search'])->name('search');
Route::get('/admin',[adminController::class,'admin']);

Route::post('/logout',[SessionController::class,'destroy']);
Route::get('/editprofile/{blog}',[UpdateController::class,'editprofile']);
Route::post('/update/{blog}',[UpdateController::class,'update']);