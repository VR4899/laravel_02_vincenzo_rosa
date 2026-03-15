<?php
// USE

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



// ROUTE


Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');

Route::get('/about-us', [PublicController::class, 'aboutUs'])->name('about.us');

Route::get('/service', [ServiceController::class,'service'])->name('service');

Route::get('/article', [ArticleController::class, 'article'])->name('article');

Route::get('/show-mostri/{id}', [PublicController::class, 'showMostro'])->name('show.mostro');

Route::get('/show-articolo/{id}', [ArticleController::class, 'showArticolo'])->name('showArticolo');



