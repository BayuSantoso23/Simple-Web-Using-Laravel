<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
Route::get('/authors/{user:username}', function(User $user){
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . 
                $user->name, 'posts' => $user->posts]);
});

// 
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', ['title' =>'Articles in category : ' . $category->name, 'posts' => $category->posts]);
});

// Contact
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
});

// About
Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Iwan Sihombing']);
});

