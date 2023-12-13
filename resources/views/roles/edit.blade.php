@extends('layouts.master')

@section('content')

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <h1>edit {{$role->title}} </h1>

                        <form action="{{url('/roles/'.$role->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input value="{{$role->title}}" name="title" type="text" class="@error('title') is-invalid @enderror form-control" placeholder="title" />
                                </div>
                            </div>
                            <div><button class="btn" type="submit">Update</button></div>
                            @include('layouts.errors')
                            <div class="form-row mt-5">
                                @foreach($permissions as $permission)
                                    <label for="" class="pr-4">
                                        <input type="checkbox" name="permissions[]"
                                               {{--hasPermissionFunction in the RoleModel file, for relation with roles--}}
                                               @if($role->hasPermission($permission)) checked @endif
                                               value="{{$permission->id}}"/> {{$permission->title}}
                                    </label>
                                @endforeach
                            </div>
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
