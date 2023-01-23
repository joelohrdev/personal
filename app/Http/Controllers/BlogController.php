<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function show(Post $post)
    {
        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
