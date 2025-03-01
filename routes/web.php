<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth')->group(function (){ 

    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::resource('categories', CategoryController::class)->middleware('auth');
    Route::resource('products', ProductController::class)->middleware('auth');

});


require __DIR__.'/auth.php';
