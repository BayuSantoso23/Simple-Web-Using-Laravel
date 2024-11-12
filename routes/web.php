<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// Blog (Article)
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all() ]);
});

// {id} is a wildcard variable
Route::get('/posts/{slug}', function($slug){

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Contact
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
});

// About
Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Iwan Sihombing']);
});

