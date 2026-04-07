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

Route::get('/blog', function () {
    $posts = Post::all();

    return response()->json($posts);
});

Route::get("/blog/{post:slug}", function (Post $post) {
    if (!$post) {
        return response()->json([
            'status' => false,
            'message' => 'Data Tidak Ditemukan'
        ]);
    }

    return response()->json($post);
});
