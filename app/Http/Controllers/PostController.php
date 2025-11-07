<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts')); // ['posts' => $posts]
    }

    public function create()
    {
        $postsArr=[
            [
                'title' => 'new post3',
                'content' => 'new content3',
                'image' => 'lala.jpg3',
                'likes' => 30,
                'is_published' => true,
            ],
            [
                'title' => 'new post4',
                'content' => 'new content4',
                'image' => 'lala.jpg4',
                'likes' => 302,
                'is_published' => true,
            ]
        ];

        foreach ($postsArr as $post) {
            Post::create($post);
        }

        dd('created');
    }

    public function update()
    {
        $post = Post::find(1);
        $post->update([
            'title' => 'update',
            'content' => 'update',
            'image' => 'update',
            'likes' => 30,
            'is_published' => true,
        ]);
        dd('update');
    }

    public function delete()
    {
       $post = Post::withTrashed()->find(1);
       $post->restore();
       dd('deleted');
    }

    public function firstOrCreate()
    {
        dd(1);
    }
}
