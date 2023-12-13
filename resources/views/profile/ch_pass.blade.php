@extends('layouts.master')

@section('content')

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <h1 class="title">Edit Your password ({{$user->name}})</h1>
                        <form action="/changePass" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input placeholder="Enter Your Current Password" class="form-control"  name="currentPass" type="text">
                                </div>
                                <br>
                                <div class="form-group col-md-6">
                                    <input placeholder="Enter Your New Password" class="form-control" name="password" type="password">
                                </div>

                                <div class="form-group col-md-6">
                                    <input placeholder="Enter Your Confirm Password" class="form-control" name="password_confirmation" type="password">
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-info" type="submit">Change</button>
                                @include('layouts.errors')
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h3>Get in Touch</h3>
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
