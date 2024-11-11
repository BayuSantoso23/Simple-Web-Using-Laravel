<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// Blog (Article)
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'Article-1-Title',
            'title' => 'Article 1',
            'author' => 'Iwan Sihombing',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aperiam perferendis, 
            maiores facilis nostrum earum ad odio molestiae incidunt, aut rem ipsum saepe dicta magnam, 
            sint pariatur quia est vel!'
        ],
        [
            'id' => 2,
            'slug' => 'Article-2-Title',
            'title' => 'Article 2',
            'author' => 'Bayu Santoso',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aperiam perferendis, 
            maiores facilis nostrum earum ad odio molestiae incidunt, aut rem ipsum saepe dicta magnam, 
            sint pariatur quia est vel!'
        ]
    ]]);
});

// {id} is a wildcard variable
Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'Article-1-Title',
            'title' => 'Article 1',
            'author' => 'Iwan Sihombing',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aperiam perferendis, 
            maiores facilis nostrum earum ad odio molestiae incidunt, aut rem ipsum saepe dicta magnam, 
            sint pariatur quia est vel!'
        ],
        [
            'id' => 2,
            'slug' => 'Article-2-Title',
            'title' => 'Article 2',
            'author' => 'Bayu Santoso',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aperiam perferendis, 
            maiores facilis nostrum earum ad odio molestiae incidunt, aut rem ipsum saepe dicta magnam, 
            sint pariatur quia est vel!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });

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

