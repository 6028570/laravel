<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller; 
use App\Http\Controllers\FrontendController;
 
Route::get('/', [FrontendController::class, 'index']);
 
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/about', [FrontendController::class, 'about']);