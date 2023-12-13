@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 p-5">
            <h1 class="title">Profile</h1>
            @if (session('updated'))
                <div class="alert alert-success">{{session('updated')}}</div>
            @endif
            <p>
                <a href="/profile/edit" class="btn btn-primary d-inline">Edit</a>
                <a href="/changePass" class="btn btn-primary d-inline">change password</a>
            </p>
            <p>
                <strong>name:</strong>
                <br>
                {{$user->name}}
            </p>

            <p>
                <strong>email:</strong>
                <br>
                {{$user->email}}
            </p>

            <p>
                <strong>mobile:</strong>
                <br>
                {{$user->phone}}
            </p>
        </div>
    </div>

@endsection
