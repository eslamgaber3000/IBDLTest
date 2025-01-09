<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;




//Ibdl blog
Route::name('Article')->group(function () {
    Route::get('Article/index', [ArticleController::class, 'index']);
    Route::get('Articles/show/{id}', [ArticleController::class, 'show']);
});
Route::post('comment/store', [CommentController::class, 'store'])->middleware('auth');
Route::get('articleTest', [ArticleController::class, 'test']);
Route::post('Article/like/create', [ArticleController::class, 'storeLike'])->middleware('auth');


Route::get('/article/filter', [ArticleController::class, 'filterArticle']);
