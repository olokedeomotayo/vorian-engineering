<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Vorian Engineering — Public Website Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/services', 'services')->name('services');

Route::view('/products', 'products')->name('products');

Route::view('/industries', 'industries')->name('industries');

Route::view('/projects', 'projects')->name('projects');

Route::view('/blog', 'blog')->name('blog');

Route::view('/contact', 'contact')->name('contact');