<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;

// Public pages
Route::get('/', fn() => view('home', ['title' => 'Home']));
Route::get('/about', fn() => view('about', ['title' => 'About']));
Route::get('/blog', function () {
    $posts = BlogPost::latest()->get();
    return view('blog', [
        'title' => 'Blog',
        'posts' => $posts,
    ]);
});
Route::get('/contact', fn() => view('contact', ['title' => 'Contact']));

// Admin page
Route::get('/admin', fn() => view('admin.index', ['title' => 'Admin Dashboard']));
