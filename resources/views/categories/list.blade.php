@extends('layouts.master')

@section('content')
    <ul>
        @foreach($categories as $category)
            <li>{{$category->title}} <a href="/category/{{$category->title}}/edit" class="btn btn-info">edit</a> </li>
        @endforeach
    </ul>
@endsection
