<?php

use App\Models\Post;
use App\Models\User;
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

// Finding the post using slug 
Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// 
Route::get('/authors/{user}', function(User $user){
    return view('posts', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts]);
});

// Contact
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
});

// About
Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Iwan Sihombing']);
});

