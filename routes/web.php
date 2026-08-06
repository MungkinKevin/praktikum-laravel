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

    Route::get('/hello', [WelcomeController::class,'hello']);
    Route::get('/', [PageController::class,'index']);
    Route::get('/about', [PageController::class,'about']);
    Route::get('/article/{id}', [PageController::class,'article']);*/

    /**==========PASTAAAA=============== */

    Route::get('/', [PastaController::class,'index']);
    Route::get('/about', [PastaController::class,'about']);
    Route::get('/article/{id}', [PastaController::class,'article']);
    Route::get('/contact', [PastaController::class,'contact']);