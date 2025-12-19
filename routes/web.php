<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/',[PagesController::class,'acceuil'])->name('home');
Route::get('/article',[PagesController::class,'articles'])->name('pages.articles');
Route::get('/show/{id}',[PagesController::class, 'show'])->name('pages.show');
Route::get('/contact',[ContactController::class,'form']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/dashboard', [UserController::class,'home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', [UserController::class,'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');
Route::get('/admin/dashboard', [ArticleController::class,'create'])->middleware(['auth', 'admin'])->name('admin.create');
Route::post('/admin/dashboard', [ArticleController::class,'saveproduit'])->middleware(['auth', 'admin'])->name('admin.save');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

