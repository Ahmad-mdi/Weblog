@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="mb-4">
                <a href="/roles/create" class="btn btn-success">add new role</a>
            </div>
            <table class="table">
                <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <th scope="row">{{$role->id}}</th>
                        <td>{{$role->title}}</td>
                        <td>
                            @if ($role->id == 1 && $role->title === 'super-admin')
                                <b class="text-warning">super-admin</b>
                            @else
                                <a href="/roles/{{$role->id}}/edit" class="btn btn-warning">edit</a>
                            @endif
                        </td>
                        <td>
                            @if ($role->id == 1 && $role->title === 'super-admin')
                                <b class="text-danger">super-admin</b>
                            @else
                                <form action="/roles/{{$role->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="delete">
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
