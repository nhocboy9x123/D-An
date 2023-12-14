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
Route::get('/buildings', [BuildingsController::class, 'index'])->name('buildings.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\UsersController;
 
Route::get('/users', [UsersController::class, 'index'])->name('users.index');