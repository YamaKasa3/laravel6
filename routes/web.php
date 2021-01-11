<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', 'PagesController@home');
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');
