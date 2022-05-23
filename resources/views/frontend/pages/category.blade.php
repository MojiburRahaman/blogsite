@extends('frontend.master')

@section('content')
<!-- Featured Section Start -->
<style>
    .box10 {
        background: #000;
        overflow: hidden;
        /* position: relative; */
    }

    .box10 img {
        width: 100%;
        height: 100px;
        opacity: 1;
        transform: scale(1.1) translateY(3%);
        transition: all .5s ease 0s;
    }

    .box10 .box-content {
        padding: 20px 0 0 20px;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        z-index: 2;
        transform: translateY(20%);
        transition: all .5s ease 0s;
    }

    .box10:hover .box-content {
        opacity: 1;
        transform: translate(0);
        transition-delay: .1s;
    }

    .box10:hover img {
        transform: scale(1.1) translateY(-3%);
        opacity: .4;
    }

    .box10 .title {
        font-size: 20px;
        font-weight: 500;
        color: #45c6a6;
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 10;
        color: inherit;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }

    .sidebar {
        border: 1px solid #f2f2f2;
    }

    .test {
        border-bottom: .5px solid wheat;
        margin-bottom: 5px;
        padding-right: 7px;
    }

    .test a {
        font-size: 16px;
        font-weight: 500;
    }

    .cat_content {
        padding: 10px 10px 15px 10px;
    }

    .cat_body {
        border: 1px solid black;
        margin-bottom: 15px;
    }
.mt-4{
    margin-top: 6px;
}
</style>
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
                                    <a href="">{{$blog->title}}</a>
                                </li>
                                @endforeach
                                {{-- <li>
                                    <a href="">nal'k;snfaknse'n</a>
                                </li>
                                <li>
                                    <a href="">nal'k;snfaknse'n</a>
                                </li> --}}
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