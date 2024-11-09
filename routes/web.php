<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
});

// Blog (Article)
Route::get('/blog', function () {
    return view('blog', ['title' => 'Lorem']);
});

// Contact
Route::get('/contact', function () {
    return view('contact',['number' => '081289890606']);
});

// About
Route::get('/about', function () {
    return view('about', ['name' => 'John Doe']);
});

