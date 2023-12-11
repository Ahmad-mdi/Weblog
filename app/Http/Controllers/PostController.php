<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewPostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::query()->where('slug',$slug)->firstOrFail();
        return view('posts.post',[
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(NewPostRequest $request)
    {
        Post::query()->create([
           'title' => $request->title,
           'slug' => $request->slug,
           'body' => $request->body,
        ]);
        return redirect('/post/create');
    }
}
