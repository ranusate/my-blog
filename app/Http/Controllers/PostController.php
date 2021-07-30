<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('posts', [
            'title' => 'Posts',
            'name' => 'Ranus',
            'posts' => Post::all()
        ]);
    }


    /**
     * show
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
