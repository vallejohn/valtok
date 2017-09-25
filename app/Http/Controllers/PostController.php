<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use function Sodium\compare;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
            'slug' => 'unique:posts,slug',
            'body' => 'required|min:10',
        ]);

        $title = $request->input('title');

        Post::create([
            'title' => $title,
            'body' => $request->input('body'),
            'slug' => str_slug($title, "-"),
            'category_id' => $request->input('category_id'),
            'tag_id' => 1,
            'published' => ($request->input('published') == null) ? false : true
        ]);

        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();

        $categories_collection = $categories->mapWithKeys(function ($categories){
            return [$categories->id => $categories->name];
        });

        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => $categories_collection
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
            'body' => 'required|min:10',
        ]);

        $title = $request->input('title');

        $post->title = $title;
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        $post->slug = str_slug($title, "-");

        $post->save();

        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('admin/posts');
    }
}
