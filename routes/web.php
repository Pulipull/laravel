<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title'=>'Homepage']);
});


Route::get('/about', function () {
    return view('about', ['nama'=>'Syaiful', 'title'=> 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=> 'Blog', 'posts' => [
        [
            'id' => '1',
            'title' => 'Lorem1',
            'author' => 'Syaiful Arifin',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quasi quaerat ipsam sunt impedit provident id necessitatibus, tenetur facilis similique eos incidunt quae. Rerum, ipsa voluptas? Saepe quisquam repellat soluta.'
        ],
        [
            'id' => '2',
            'title' => 'Lorem2',
            'author' => 'Syaiful Arifin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis soluta explicabo accusamus nisi maxime omnis facilis veniam odio? Ad corrupti cumque placeat inventore soluta tenetur officiis nulla ipsa atque maiores?'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});

Route:: get('/posts/{id}', function($id){
$posts = [
        [
            'id' => '1',
            'slug'=> 'lorem-1',
            'title' => 'Lorem1',
            'author' => 'Syaiful Arifin',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quasi quaerat ipsam sunt impedit provident id necessitatibus, tenetur facilis similique eos incidunt quae. Rerum, ipsa voluptas? Saepe quisquam repellat soluta.'
        ],
        [
            'id' => '2',
            'slug'=> 'lorem-2',
            'title' => 'Lorem2',
            'author' => 'Syaiful Arifin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis soluta explicabo accusamus nisi maxime omnis facilis veniam odio? Ad corrupti cumque placeat inventore soluta tenetur officiis nulla ipsa atque maiores?'
        ]
        ];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id']==$id;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});