<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $blog_posts = Post::all();
        return view('posts', [
            'title' => 'All Post',
            'posts' =>  Post::with(['user', 'category'])->latest()->filter(request(['search']))->paginate(7),
            'active' => 'posts',
        ]);
    }

    public function show(Post $post)
    {
        $new_post = Post::find($post);

        return view('post', [
            "title" => "singgle post",
            'post' => $post,
            'active' => 'posts',
        ]);
    }
}
