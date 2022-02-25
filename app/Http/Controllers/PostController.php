<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $blog_posts = Post::all();
        return view('posts', [
            'title' => 'Post',
            'posts' => $blog_posts
        ]);
    }

    public function show(Post $post)
    {
        $new_post = Post::find($post);

        return view('post', [
            "title" => "singgle post",
            'post' => $post
        ]);
    }
}
