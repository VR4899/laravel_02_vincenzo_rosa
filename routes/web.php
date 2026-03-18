<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about.us');

Route::get('/service', [PageController::class, 'service'])->name('service');

Route::get('/mostri', [PageController::class, 'mostri'])->name('mostri');
Route::get('/mostri/{id}', [PageController::class, 'mostro'])->name('mostro');


Route::get('/article', [ArticleController::class, 'article'])->name('article');
Route::get('/show-articolo/{id}', [ArticleController::class, 'showArticolo'])->name('showArticolo');
