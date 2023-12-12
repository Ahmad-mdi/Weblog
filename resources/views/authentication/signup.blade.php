@extends('layouts.master')
@section('content')
    <br><br>
    <form method="POST" action="{{url('/signup/store')}}">
        @csrf
        <h1>Signup user</h1>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="name" type="text" class="form-control" placeholder="Enter Your name">
                <input name="email" type="email" class="form-control" placeholder="Enter Your email">
                <input name="phone" type="text" class="form-control" placeholder="Enter Your mobile">
                <input name="password" type="password" class="form-control" placeholder="Enter Your password">
                <input name="password_confirmation" type="password" class="form-control"
                       placeholder="Enter Your conf_password">
                <div>
                    <button class="btn" type="submit">Signup</button>
                </div>
                <br>
                @include('layouts.errors')
            </div>
    </form>

@endsection
