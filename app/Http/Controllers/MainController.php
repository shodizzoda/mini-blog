<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(2);
    
        return view('blog.index', compact('posts'));
    }
    
    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
