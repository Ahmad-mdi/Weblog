<?php


namespace App\Http\Services;


use App\Models\Post;
use Illuminate\Http\Request;
class PostService
{
    public function add(Request $request)
    {
        Post::query()->create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);
    }
}
