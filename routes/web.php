<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('Home');
});
Route::get('/login',function(){
    return view('login');
});
Route::post('/login',function(){
    if(Auth::check()){}
    return view('home');
});

 
use App\Http\Controllers\BuildingsController;
Route::get('/buildings', [BuildingsController::class, 'index']);
use App\Http\Controllers\BannersController;
Route::get('/banners', [BannersController::class,'index']);
use App\Http\Controllers\OrderdetailsController;
Route::get('/oderdetails', [OrderdetailsController::class,'index']);