<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('about', [PageController::class, 'about'])
    ->name('about');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');

Route::post('articles', [ArticleController::class, 'store'])
    ->name('articles.store');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])
    ->name('articles.update');
