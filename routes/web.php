<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/data-table',[DashboardController::class,'DataTable'])->name('admin.table.datatable');
    Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');
});

/*
|--------------------------------------------------------------------------
| Registration Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/register',[AuthController::class,'RegisterView'])->name('auth.register.view')->middleware('guest');
Route::post('/admin/register',[AuthController::class,'register'])->name('auth.register')->middleware('guest');

/*
|--------------------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/login',[AuthController::class,'LoginView'])->name('auth.login.view')->middleware('guest');
Route::post('/admin/login',[AuthController::class,'login'])->name('auth.login')->middleware('guest');





