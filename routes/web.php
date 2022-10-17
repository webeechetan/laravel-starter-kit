<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Unisharp\LaravelFilemanager\Lfm;
use App\Http\Controllers\RoleAndPermissionController;



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/data-table',[DashboardController::class,'DataTable'])->name('admin.table.datatable');
    Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');

    /*
    |--------------------------------------------------------------------------
    | Roles and Permissions
    |--------------------------------------------------------------------------
    */

    // Roles
    Route::get('/role',[RoleAndPermissionController::class,'RoleList'])->name('role.list');
    Route::post('/role',[RoleAndPermissionController::class,'RoleStore'])->name('role.store');
    // Permissions
    Route::get('/permission',[RoleAndPermissionController::class,'PermissonList'])->name('permission.list');
    Route::post('/permission',[RoleAndPermissionController::class,'PermissonStore'])->name('permission.store');
    // Users
    Route::get('/user',[RoleAndPermissionController::class,'UserList'])->name('user.list');

    /*
    |--------------------------------------------------------------------------
    | File Manager Routes
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'filemanager'], function () {
        Lfm::routes();
    });
    Route::get('/filemanager-custom-input',function (){
        return view('admin.file-manager.custom-input');
    })->name('file-manager.custom-input');

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





