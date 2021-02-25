<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/posts/{post}', function ($post) {
    $postss = [
'first' => '111111',
'second' => ' 222222'

    ];

    if (! array_key_exists($post, $postss) ) {
        abort(404);
        # code...;
    }
    return view('post', ['post' => $postss[$post]]);

});


// Route::get('test', function () {
//     return view('test' ,);
//     // return 'Hello world';
// });