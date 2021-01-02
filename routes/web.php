<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    $name = request('name');

    return view('test', [
        'name' => $name,
    ]);
});

Route::get('/posts/{post}', function($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first post!',
        'my-second-post' => 'Second post',
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }
    return view('post', [
        'post' => $posts[$post]
    ]);
});