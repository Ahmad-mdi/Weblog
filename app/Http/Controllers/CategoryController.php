<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.list',compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['unique:categories,title', 'required'],
        ]);
        Category::query()->create([
            'title' => $request->title,
        ]);
        return redirect('/');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'title' => ['required'],
        ]);
        $titleExists = Category::query()->where('title', $request->title)
            ->where('id', '!=', $category->id)
            ->exists();
        if ($titleExists) {
            return redirect()->back()->withErrors(['title' => 'the title already been taken']);
        }
        $category->update([
            'title' => $request->title,
        ]);
        return redirect('/category');
    }

    /* public function destroy(Category $category)
     {
         //
     }*/
}
