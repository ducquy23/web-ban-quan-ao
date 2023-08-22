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

Route::prefix('admin')->group(function () {
    Route::get('/',[\App\Http\Controllers\DashboardController::class,'dashboardAction'])->name('route-dashboard');
    /*
     * Route Category
     */
    Route::prefix('category')->group(function () {
       Route::get('/',[\App\Http\Controllers\CategoryController::class,'index'])->name('list-category');
       Route::match(['get','post'],'/add',[\App\Http\Controllers\CategoryController::class,'addNewCategory'])->name('add-category');
    });
});
