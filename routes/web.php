<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

// -----------------------------
// HOMEPAGE
// -----------------------------
Route::get('/', [PageController::class, 'homepage'])->name('homepage');

// -----------------------------
// ABOUT US
// -----------------------------
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about.us');

// -----------------------------
// SERVIZI
// -----------------------------
Route::get('/service', [PageController::class, 'service'])->name('service');

// -----------------------------
// MOSTRI
// -----------------------------
Route::get('/mostri', [PageController::class, 'mostri'])->name('mostri');
Route::get('/mostri/{id}', [PageController::class, 'mostro'])->name('mostro');

// -----------------------------
// ARTICOLI
// -----------------------------
Route::get('/article', [ArticleController::class, 'article'])->name('article');
Route::get('/show-articolo/{id}', [ArticleController::class, 'showArticolo'])->name('showArticolo');
