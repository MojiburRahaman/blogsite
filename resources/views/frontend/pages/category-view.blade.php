@extends('frontend.master')

@section('content')
<style>
    .post-title {
        transition: color 0.3s ease;
        font-size: 1.125rem;
        line-height: 1.4;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
    }

    .post_description {
        font-family: "Noto Sans", sans-serif;
        font-size: medium;
        font-weight: 400;
        line-height: 1.5;
        color: #001737;
        text-align: left;
    }

    .mt-2 {
        margin-top: 1rem;
    }

    .float--right {
        font-size: small;
        margin-right: 15px;
    }

    .float--right i {
        padding-right: 2px
    }

</style>
<!-- Blog Section Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xs-12 ">
                <!-- Post Item Start -->
                <div>
                    <h1 class="mg-b-0 tx-bold tx-spacing--1"> {{$title}}'s Articles :</h1>

                </div>
                <h2>

                </h2>
                <style>
                    .blog-card {
                        display: grid;
                        grid-template-columns: 1fr 2fr;
                        grid-template-rows: 1fr;
                        min-height: 77px;
                        margin-bottom: 30px
                    }

                    .blog-card {
                        display: flex;
                        flex-direction: row;
                        background: #fff;
                        box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.1);
                        border: 1px solid rgba(72, 94, 144, 0.16);
                        border-radius: 0.25rem;
                        overflow: hidden;
                        -webkit-box-shadow: 8px 10px 15px -7px rgba(0, 0, 0, 0.57);
                        box-shadow: 8px 10px 15px -7px rgba(0, 0, 0, 0.57);
                        transition: box-shadow .3s ease-out, transform .3s ease-out, opacity .2s ease-out;
                        transition-delay: .1s;
                        transform: translateZ(0);
                    }

                    /* a {
                        text-decoration: none;
                        background-color: transparent;
                    } */

                    .post-image {
                        height: 100%;
                    }

                    .post-image {
                        transition: opacity 0.3s ease;
                        display: block;
                        width: 100%;
                        object-fit: cover;
                    }


                    .badge {
                        font-size: 10px;
                        font-weight: 500;
                        font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
                        padding: 3px 5px 4px;
                        border-radius: 3px;
                    }

                    .article-topbar-right {
                        display: inline-block;
                        float: right;
                        color: #252525;
                    }

                    .badge {
                        font-size: 10px;
                        font-weight: 500;
                        font-family: -apple-system, BlinkMacSystemFont, "Inter UI", Roboto, sans-serif;
                        padding: 3px 5px 4px;
                        border-radius: 3px;
                        color: white;
                    }

                    .post-title {
                        transition: color 0.3s ease;
                        font-size: 2rem;
                        line-height: 1.4;
                        color: #121212;
                        font-weight: 700;
                        margin: 0 0 0.5rem 0;
                    }

                    .article-details {
                        padding: 5px 15px 0 20px;
                    }

                    .article-details p.post-description {
                        margin-bottom: 1rem;
                    }

                    .post-description p {
                        font-size: medium;
                        font-weight: 600;
                    }

                    .article .article_item .article-footer {
                        border-top: 0.0625rem solid #ebebeb;
                        padding: 1rem 0 0 0;
                    }

                    .post-author {
                        font-weight: 900;
                        font-size: 0.875rem;
                        line-height: 1;
                        font-size: small;
                    }

                    .article-footer {
                        margin-bottom: 20px;
                    }

                    .article .article_item .article-footer .extra-footer {
                        display: inline-block;
                        float: right;
                    }

                    .read_more_btn {
                        float: right;
                        margin-right: 30px;
                        padding: 5px 18px;
                        border-radius: 28px;
                        color: #45c6a6;
                        background-color: transparent;
                        border-color: #45c6a6;
                        font-family: "Playfair Display", serif;
                        font-size: 11px;
                        line-height: 20px;
                        -webkit-transition-property: color, border-color, background-color;
                        transition-property: color, border-color, background-color;
                        -webkit-transition-duration: .35s;
                        transition-duration: .35s;
                        -webkit-transition-timing-function: ease-in-out;
                        transition-timing-function: ease-in-out;
                        text-transform: uppercase;
                    }

                    .read_more_btn:hover {
                        background-color: #45c6a6;
                        color: white;
                    }

                    @media (max-width: 767px) {
                        .blog-card {
                            display: block;
                            margin-bottom: 30px;
                        }

                        .read_more_btn {
                            float: right;
                            margin-right: 10px;
                            padding: 5px 15px;
                            border-radius: 28px;
                            color: #45c6a6;
                            background-color: transparent;
                            border-color: #45c6a6;
                            font-family: "Playfair Display", serif;
                            font-size: 11px;
                            line-height: 20px;
                            -webkit-transition-property: color, border-color, background-color;
                            transition-property: color, border-color, background-color;
                            -webkit-transition-duration: .35s;
                            transition-duration: .35s;
                            -webkit-transition-timing-function: ease-in-out;
                            transition-timing-function: ease-in-out;
                            text-transform: uppercase;
                        }
                    }

                </style>
                @foreach ($posts as $post)

                <article class="blog-card">
                    <a href="{{route('FrontendPostView',$post->slug)}}">
                        <img loading="lazy" class="post-image" src="{{asset('projects/'.$post->thumbnail)}}">
                    </a>
                    <div class="article-details">
                        <div class="article-topbar">
                            <a href="{{route('FrontendCategoryWisePost',$post->Category->slug)}}"
                                class="badge">{{$post->Category->title}}</a>
                            <div class="article-topbar-right">

                                <p class="float--right">
                                    <i class="fa fa-eye text-primary"></i>
                                    <span>{{$post->views}} &nbsp;views</span>
                                </p>
                                <p class="float--right">
                                    <i class="fa fa-calendar text-primary"></i>
                                    <span>{{$post->created_at->format('d-m-Y')}}</span>
                                </p>
                            </div>

                        </div>
                        <h3 class="post-title">
                            <a href="{{route('FrontendPostView',$post->slug)}}">{{$post->title}}</a>
                        </h3>
                        <span class="post-description">
                            {!!Str::limit($post->description,200)!!}

                        </span>
                        <div class="article-footer">
                            <span class="post-author"> <i class="fa fa-user"></i> &nbsp;<a href="">Mojibur
                                    Rahaman</a></span>

                            {{-- <div class="extra-footer"> --}}
                            <a class="btn read_more_btn" href="{{route('FrontendPostView',$post->slug)}}">
                                Read More
                            </a>
                            {{-- </div> --}}
                        </div>
                    </div>
                </article>
                @endforeach
                <div class="mt-2">
                    {{$posts->links('frontend.paginator')}}
                </div>
                <!-- Post Footer End -->

                <!-- Pager Start -->

                <!-- Pager End -->
            </div>


            <!-- Post Item End -->



            <!-- Post Author Start -->
            <div class="col-md-4">

                <div class="post--author clearfix pt--50">
                    <div class="img float--left">
                        <img src="img/blog-img/post-author.jpg" alt="" class="img-circle">
                    </div>

                    <div class="info ov--h">
                        <div class="header clearfix">
                            <h2 class="name h6"><a href="author.html" class="btn-link">Karen Rosalie</a></h2>

                            <p class="role float--left">Photographer &amp; Blogger</p>

                            <div class="social float--right">
                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, suscipit. Mollitia
                                placeat, delectus autem aliquid eius assumenda quibusdam accusamus ad illo soluta labore
                                quam, sunt dolor nisi voluptate provident harum!</p>
                        </div>

                        <div class="action">
                            <a href="author.html">View all posts by Dylan Reyes</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Author End -->
            <!-- Widget End -->
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection