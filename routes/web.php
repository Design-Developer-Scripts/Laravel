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



Route::view('/','page.welcome');

// Cookie Policy Controller
Route::get('cookie',[\App\Http\Controllers\frontend\CookiePolicyController::class,'cookieSelectionAll'])->name('cookie.selection.all');
Route::post('cookie',[\App\Http\Controllers\frontend\CookiePolicyController::class,'cookieSelection'])->name('cookie.selection');

Route::prefix('blog')->group(function () {
    Route::get('/',[\App\Http\Controllers\frontend\BlogController::class,'index'])->name('blog.index');
    Route::get('/{url}',[\App\Http\Controllers\frontend\BlogController::class,'singel'])->name('blog.singel');
});


Route::view('datenschutzerklaerung','page.datenschutzerklaerung')->name('datenschutzerklaerung');
Route::view('impressum','page.impressum')->name('impressum');

// Auth Start
Route::prefix('dashboard')->name('dashboard.')->middleware(['auth:sanctum','verified'])->group(function(){
    # Start Dashboard
    Route::get('/',function(){
        return view('page.dashboard');
    })->name('home');

#########################--ADMIN START--#####################################
    Route::middleware(['administrator'])->group(function(){
        # Developer Controller
        Route::get('developer',[\App\Http\Controllers\Admin\DeveloperController::class,'index']);
        # User Controller
        Route::resource('user',\App\Http\Controllers\Admin\UserController::class);
        # Distributor Controller
        Route::resource('distributor',\App\Http\Controllers\Admin\DistributorController::class);
        // Distributor Error Controller
        Route::resource('distributorerror',\App\Http\Controllers\Admin\DistributorErrorController::class);
        // Distributor History Controller
        Route::resource('distributorhistory',\App\Http\Controllers\Admin\DistributorHistoryController::class);
        # Blog Controller
        Route::resource('blog',\App\Http\Controllers\Admin\BlogController::class);
    });
#########################--ADMIN END--######################################
});// Auth End