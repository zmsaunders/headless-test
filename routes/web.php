<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(PageController::class)
    ->group(function() {
        Route::get('/', 'homepage')->name('home');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blog/{slug}', 'post')->name('blogPost');
    });
