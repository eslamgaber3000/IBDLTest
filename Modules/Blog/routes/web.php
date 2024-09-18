<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\App\Http\Controllers\ArticleController;
use Modules\Blog\App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('blog', BlogController::class)->names('blog');

    
});

//index routes 
// Route::name('Article')->group(function(){
//     Route::get('Article/index',[ArticleController::class,'index']);
// });
