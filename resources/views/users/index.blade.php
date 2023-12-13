@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="mb-4">
                <a href="/users/create" class="btn btn-success">add new user</a>
            </div>
            <table class="table">
                <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($userList as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->role->title}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            @can('update-user',\App\Models\User::class)
                                <a href="/users/{{$user->name}}/edit" class="btn btn-warning">edit</a>
                            @endcan
                        </td>
                        <td>
                            @if ($user->id == auth()->user()->id)
                                <span style="color: cornflowerblue"> not delete you</span>
                            @else
                                @can('delete-user',\App\Models\User::class)
                                    <form action="/users/{{$user->name}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="delete">
                                    </form>
                                @endcan
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
