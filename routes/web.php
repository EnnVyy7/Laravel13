<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/contact', function () {
//     return view('contact', ["email" => 'nvaldinata1@gmail.com', 'no' => '082280868799']);
// });


// Get All
Route::get('/blog', function () {
    $posts = Post::all();

    return response()->json($posts);
});

// Get Detail 1 Data
Route::get("/blog/{post:slug}", function (Post $post) {
    return response()->json($post->);
});

// Get Waktu Dibuat menggunakan diffForHumans
Route::get("/blog/{post:slug}/time", function (Post $post) {
    return response()->json($post->created_at->diffForHumans());
});
