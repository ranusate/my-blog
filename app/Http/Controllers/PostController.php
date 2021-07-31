<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{


    /**
     * Show all of the post for the application.
     *
     * @return void
     */
    public function index()
    {
        return view('posts', [
            'title' => 'All Post',
            'name' => 'Ranus',
            // 'posts' => Post::latest();
            'posts' => Post::with(['user', 'category'])->latest()->get()
        ]);
    }


    /**
     * show of the post by param.
     *
     * @param  mixed $post
     * @return void
     */
    public function show(Post $post)
    {
        return view(
            'post',
            [
                'title' => 'Single Post',
                'post' => $post
            ]
        );
    }


}
