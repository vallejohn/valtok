<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function blogIndex()
    {
        $posts = Post::all();
        return view('pages.blog.index', compact('posts'));
    }

    public function blogShow(Post $post)
    {
        return view('pages.blog.show', compact('post'));
    }
}
