@extends('frontend.master')
@section('title')
{{$title}} - {{config('app.name')}}
@endsection
@section('content')
<!-- Blog Section Start -->
<section class="section post_all">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xs-12 ">
                <!-- Post Item Start -->
                <div>
                    <h1 class="mg-b-0 tx-bold tx-spacing--1"> {{$title}}'s Articles :</h1>

                </div>
                <h2>

                </h2>
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

                <div class="sidebar">

                    <div class="heading">
                        <h4 class="card-header">Latest Blogs</h4>
                    </div>
                    <div class="sidebar_content">
                        @foreach ($latest_post as $blog)
                        <div class="border">
                            <div class="row">
                                <div class="col-lg-4 col-xs-3 ">
                                    <img src="{{asset('projects/'.$blog->thumbnail)}}" alt="{{$blog->title}}">
                                </div>
                                <div class="col-lg-8 col-xs-9">
                                    <a class="related_post_text"
                                        href="{{route('FrontendPostView',$blog->slug)}}">{{$blog->title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="card_footer text-center">
                            <a href="{{route('FrontendPostAll')}}" title="View More Post">View More Post</a>
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