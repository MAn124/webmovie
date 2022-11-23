<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\EpisodeController;

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

Route::get('/', [IndexController::class, 'home'])->name('homepage');
Route::get('/category', [IndexController::class, 'category'])->name('category');
Route::get('/country', [IndexController::class, 'country'])->name('country');
Route::get('/watch', [IndexController::class, 'watch'])->name('watch');
Route::get('/movie', [IndexController::class, 'movie'])->name('movie');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
