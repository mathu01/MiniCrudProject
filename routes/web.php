<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class,'acceuil']);
Route::get('/articles',[PagesController::class,'articles']);
Route::post('/articles/{}',[PagesController::class,'show']);
Route::get('/cart',[CartController::class,'index']);
Route::get('/cart/add/{id}',[CartController::class, 'add']);
Route::get('/payment', [PaymentController::class, 'pay']);
Route::get('/contact', [ContactController::class, 'form']);
Route::post('/contact', [ContactController::class, 'send']);