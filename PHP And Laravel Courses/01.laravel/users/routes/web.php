<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/simple', function () {
    return view('simpleWelcome');
});

Route::get('/simpleAbout', function () {
    // return $article;
    return view(
        'simpleAboutus',
        [
            'article' => \App\Models\Article::take(3)->latest()->get(),
        ]
    );
});

Route::get('posts/{post}', [PostsController::class, 'show']);
