<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index')->name('home');
Route::get('posts/tag/{tagSlug}', 'PostController@index')->where('tagSlug', '[a-z]+')->name('posts.index.tag');
Route::resource('posts', 'PostController')->only(['index', 'show']);
