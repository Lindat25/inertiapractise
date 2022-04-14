<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::All();

        return inertia('Posts/Index', compact('posts'));
    }
}
