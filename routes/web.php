<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title'=>'Homepage']);
});


Route::get('/about', function () {
    return view('about', ['nama'=>'Syaiful', 'title'=> 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=> 'Blog', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});

Route:: get('/posts/{post}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route:: get('/authors/{user:username}', function(User $user){
    return view('posts', ['title' => count($user->posts) . 'Articles by' . $user->name, 'posts' => $user->posts]);
});
Route:: get('/categories/{category:id}', function(Category $category){
    return view('posts', ['title' => 'Articles in ' . $category->name, 'posts' => $category->posts]);
});