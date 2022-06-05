@extends('frontend.master')

@section('content')
<section class="section pt--60 pb--30">
    <div class="container">
        <!-- Featured Posts Start -->
        <div class="featured--posts">
            <div class="row">
                <!-- Category Item Start -->
                <div class="col-lg-8 col-12 col-sm-8 col-xs-12">
                    <div class="row">

                        @foreach ($categories as $category)
                        <div class="col-lg-3 col-sm-4 col-md-4 col-xs-4 mb-4">
                            <div class="cat_body">

                                <a href="{{route('FrontendCategoryWisePost',$category->slug)}}" target="_blank">
                                    <div class="box10">
                                        <img src="{{asset('categories/thumbnail/'.$category->thumbnail)}}"
                                            alt="{{$category->title}}" title="Laravel">
                                        <div class="box-content">
                                            <h3 class="title">{{$category->title}}</h3>
                                        </div>
                                    </div>
                                </a>
                                <div class="cat_content text-center">
                                    <a>{{($category->title)}}</a>
                                    <div class="post--cat  mt-4">
                                        <a href="{{route('FrontendCategoryWisePost',$category->slug)}}" data-overlay="0.5" data-overlay-color="primary">Post ({{$category->blog_count}})</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- Category Item End -->
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="sidebar">
                        <div class="heading">
                            <h4 class="card-header">Most Popular Post</h4>
                        </div>
                        <div class="sidebar_content">
                            <ul>
                                @foreach ($blogs as $blog)

                                <li class="test">
                                    <a href="{{route('FrontendPostView',$blog->slug)}}">{{$blog->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Posts End -->
    </div>
</section>
<!-- Featured Section End -->
@endsection