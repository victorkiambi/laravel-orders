<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class,'index'])->middleware('role:admin');
Route::get('/user', [App\Http\Controllers\User\DashboardController::class,'index'])->middleware('role:user');

Route::post('/user/create/order', [App\Http\Controllers\OrdersController::class,'store'])->middleware('role:user');
Route::get('/user/show/orders', [App\Http\Controllers\OrdersController::class,'show'])->middleware('role:user');
Route::get('/user/edit/{id}', [App\Http\Controllers\OrdersController::class,'edit'])->middleware('role:user');
Route::post('/user/update', [App\Http\Controllers\OrdersController::class,'update'])->middleware('role:user');
Route::delete('/user/delete/{id}', [App\Http\Controllers\OrdersController::class,'destroy'])->middleware('role:user');

Route::get('/admin/show/orders', [App\Http\Controllers\Admin\DashboardController::class,'show'])->middleware('role:admin');
