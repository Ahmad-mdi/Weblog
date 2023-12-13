@extends('layouts.master')

@section('content')

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <h1>edit User: {{$user->name}} </h1>

                        <form action="{{url('/users/'.$user->name)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input value="{{$user->name}}" name="name" type="text" class="@error('name') is-invalid @enderror form-control" placeholder="name" />
                                    @error('name')<li class="text-danger"> {{$message}} </li>@enderror

                                    <input value="{{$user->phone}}" name="phone" type="text" class="@error('phone') is-invalid @enderror form-control" placeholder="phone" />
                                    @error('phone')<li class="text-danger"> {{$message}} </li>@enderror

                                    <input value="{{$user->email}}" name="email" type="text" class="@error('email') is-invalid @enderror form-control" placeholder="email" />
                                    @error('email')<li class="text-danger"> {{$message}} </li>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <select name="role_id" class="form-control">
                                    @foreach($roles as $role)
                                        <option @if ($user->role->id == $role->id) selected @endif value="{{$role->id}}">
                                            {{$role->title}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role_id')<li class="text-danger"> {{$message}} </li>@enderror
                            </div>

                            <div><button class="btn" type="submit">Update</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h3>Get in Touch</h3>
                        {{--<p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus.
                        </p>
                        <h4><i class="fa fa-map-marker"></i>123 News Street, NY, USA</h4>
                        <h4><i class="fa fa-envelope"></i>info@example.com</h4>
                        <h4><i class="fa fa-phone"></i>+123-456-7890</h4>--}}
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
