<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customersController;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\OrderdetailsController;
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
Route::get('buildings',function(){
    return view('buildings');
});
Route::get('/customer',function(){
    return view('customer');
});
Route::get('/macs',function(){
    return view('macs');
});
Route::get('/orderdetail',function(){
    return view('orderdetail');
});
Route::get('/category',function(){
    return view('category');
});
Route::get('/Main',function(){
    return view('Main');
});
Route::get('/agencies',function(){
    return view('agencies');
});

 
use App\Http\Controllers\BuildingsController;
Route::get('/buildings', [BuildingsController::class, 'index']);

Route::get('buildings/create', [BuildingsController::class,'create']); 
Route::post('buildings/store', [BuildingsController::class,'store'])->name("building.create");
Route::put('/buildings/update/{id}', [BuildingsController::class,'update'])->name('building.update');
Route::get('buildings/edit/{id}', [BuildingsController::class,'edit']);
Route::DELETE('/buildings/delete/{id}', [BuildingsController::class,'destroy']);
