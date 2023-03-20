<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('blog.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('blog.show', ['post' => $post]);
    }
}
