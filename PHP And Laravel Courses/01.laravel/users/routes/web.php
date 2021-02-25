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
    // return view('welcome');
    $name = request('name');
    // return 'Hello world';
    return view('test', ['name' =>$name]);
});

Route::get('/welcome', function () {
    return view('welcome');
});




// Route::get('/posts/{post}', function ($post) {


// });

// Route::get('/posts/{post}', 'PostsController@show');
Route::get('posts/{post}', [PostsController::class, 'show']);
// Route::get('test', function () {
//     return view('test' ,);
//     // return 'Hello world';
// });