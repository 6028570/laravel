<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::all();
    return view('posts', compact('posts'));
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::findOrFail($id);
    return view('post', compact('post'));
});
