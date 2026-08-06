<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

    /** 
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/hello', function () {
        return 'Hello World';
    }); */

    Route::get('/hello', [WelcomeController::class,'hello']);
    Route::get('/', [PageController::class,'index']);
    Route::get('/about', [PageController::class,'about']);
    Route::get('/article/{id}', [PageController::class,'article']);

