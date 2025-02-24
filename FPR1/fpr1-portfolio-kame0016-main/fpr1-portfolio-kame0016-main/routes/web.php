<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
})->name('home');

Route::get('/opinion', function () {
    return view('opinion');
})->name('opinion');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/posts', function () {
    return view('postController');
})->name('postController');
