@extends('layouts.master')
@section('content')
    <a href="{{url('/signup/create')}}" class="btn btn-info">Signup</a>
    <br><br>
    <form method="POST" action="{{url('/login/store')}}">
        @csrf
        <h1>login user</h1>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="phone" type="text" class="form-control" placeholder="Enter Your mobile">
                <input name="password" type="password" class="form-control" placeholder="Enter Your password">
                <div><button class="btn" type="submit">login</button></div>
                <br>
                @include('layouts.errors')
            </div>
    </form>

@endsection
