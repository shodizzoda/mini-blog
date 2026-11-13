<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Category $category, Post $post)
    {
        return view('blog.post', compact('category', 'post'));
    }
}
