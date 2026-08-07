<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PastaController;
    /** 
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/hello', function () {
        return 'Hello World';
    }); 
    */
    Route::get('/hello', [WelcomeController::class,'hello']);
    Route::get('/', [PageController::class,'index']);
    Route::get('/about', [PageController::class,'about']);
    Route::get('/article/{id}', [PageController::class,'article']);

    /**==========PASTAAAA=============== */

    Route::get('/pasta', [PastaController::class,'index']);
    Route::get('/pasta/about', [PastaController::class,'about']);
    Route::get('/pasta/article/{id}', [PastaController::class,'article']);
    Route::get('/pasta/contact', [PastaController::class,'contact']);

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
