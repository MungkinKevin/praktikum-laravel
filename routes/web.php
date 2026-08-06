<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

    /** 
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/hello', function () {
        return 'Hello World';
    }); */

    Route::get('/hello', [WelcomeController::class,'hello']);
    Route::get('/', [WelcomeController::class,'index']);
    Route::get('/about', [WelcomeController::class,'about']);
    Route::get('/article/{id}', [WelcomeController::class,'article']);