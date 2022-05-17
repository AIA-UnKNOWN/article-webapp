<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CreateArticleController;
use App\Http\Controllers\EditArticleController;
use App\Http\Controllers\ViewArticleController;
use App\Http\Controllers\DeleteArticleController;


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

Route::get('/', ArticlesController::class)->name('articles');
Route::get('/view/{id}', ViewArticleController::class);
Route::get('/create', CreateArticleController::class);
Route::post('/create', CreateArticleController::class);
Route::get('/edit/{id}', EditArticleController::class);
Route::post('/edit/{id}', EditArticleController::class);
Route::post('/delete/{id}', DeleteArticleController::class)->name('delete');