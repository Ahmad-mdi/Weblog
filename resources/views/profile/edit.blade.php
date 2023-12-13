@extends('layouts.master')

@section('content')

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <h1 class="title">Edit Your Data</h1>
                        <form action="/profile/update" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input value="{{$user->name}}" name="name" type="text"
                                           class="@error('name') is-invalid @enderror form-control" placeholder="name"/>
                                    @error('name')
                                    <li class="text-danger"> {{$message}} </li>@enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <input value="{{$user->email}}" name="email" type="email"
                                           class="@error('email') is-invalid @enderror form-control"
                                           placeholder="email"/>
                                    @error('email')
                                    <li class="text-danger"> {{$message}} </li>@enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <input value="{{$user->phone}}" name="phone" type="text"
                                           class="@error('phone') is-invalid @enderror form-control"
                                           placeholder="phone"/>
                                    @error('phone')
                                    <li class="text-danger"> {{$message}} </li>@enderror
                                </div>
                            </div>
                            <div>
                                <button class="btn" type="submit">UpdateProfile</button>
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
