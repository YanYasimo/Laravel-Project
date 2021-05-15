<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController; 
use App\Http\Controllers\Site\CategoryController; 
use App\Http\Controllers\Site\BlogController; 
use App\Http\Controllers\Site\ContactController; 

Route::namespace('Site')->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/products', [CategoryController::class, 'index']);
    Route::get('/products/{slug}', [CategoryController::class, 'show']);


    Route::get('/blog', [BlogController::class, 'index']);

    Route::view('/about', 'site.about.index');
    
    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'contact']);
});
