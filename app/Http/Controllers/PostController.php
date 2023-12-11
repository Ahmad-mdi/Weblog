<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    public function store(NewPostRequest $request)
    {
        Post::query()->create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);
        return redirect('/post/create');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post','categories'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $slugExists = Post::query()->where('slug', $request->slug)
            ->where('id', '!=', $post->id)
            ->exists();
        if ($slugExists) {
            return redirect()->back()->withErrors(['slug' => 'the slug already been taken']);
        }
        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);
        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
