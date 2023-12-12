@extends('layouts.master')
@section('content')
    <!-- Top News Start-->
    <div class="top-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="/img/news-450x350-1.jpg"/>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="/img/news-450x350-2.jpg"/>
                                <div class="tn-title">
                                    <a href="">Integer hendrerit elit eget purus sodales maximus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tn-right">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="/img/news-350x223-1.jpg"/>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="/img/news-350x223-2.jpg"/>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="/img/news-350x223-3.jpg"/>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="/img/news-350x223-4.jpg"/>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->
    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6">
                        <h2>{{$category->title}}</h2>
                        <div class="row cn-slider">
                            @foreach($category->posts as $post)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="/img/news-350x223-1.jpg"/>
                                        <div class="cn-title">
                                            <a href="/post/{{$post->slug}}">{{$post->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Tab News Start-->
    <div class="tab-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="featured" class="container tab-pane active">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-1.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-2.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-3.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                        <div id="popular" class="container tab-pane fade">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-4.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-5.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-1.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                        <div id="latest" class="container tab-pane fade">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-2.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-3.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-4.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="m-viewed" class="container tab-pane active">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-5.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-4.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-3.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                        <div id="m-read" class="container tab-pane fade">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-2.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-1.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-3.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                        <div id="m-recent" class="container tab-pane fade">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-4.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-5.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="/img/news-350x223-1.jpg"/>
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab News Start-->
@endsection





