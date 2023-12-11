@extends('layouts.master')

@section('content')
    <div class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form method="POST" action="/post/store">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input name="title" type="text" class="form-control" placeholder="Enter Your Title">
                                    @error('title')<li class="text-danger"> {{$message}} </li>@enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input name="slug" type="text" class="form-control" placeholder="Enter your slug">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="body" class="form-control" rows="5" placeholder="Enter your body"></textarea>
                            </div>
                            <div><button class="btn" type="submit">Send Message</button></div>
                        </form>
                        @if (count($errors->all()) > 0)
                            @foreach($errors->all() as $error)
                                <ul class="bg-danger p-3">
                                    <li>{{$error}}</li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h3>Get in Touch</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus.
                        </p>
                        <h4><i class="fa fa-map-marker"></i>123 News Street, NY, USA</h4>
                        <h4><i class="fa fa-envelope"></i>info@example.com</h4>
                        <h4><i class="fa fa-phone"></i>+123-456-7890</h4>
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
@endsection
