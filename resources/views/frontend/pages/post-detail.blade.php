@extends('frontend.master')

@section('content')
<!-- Blog Section Start -->
<style>
    .related_post_text {
        font-size: 15px;
    }

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
        margin-bottom: 10px;
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

    .card_footer {
        padding: 7px;
        border-top: 1px solid;
        border-color: rgba(72, 94, 144, 0.16);
    }

    .card_footer a {
        font-size: 13px;
        color: grey;
    }

</style>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pb--60">
                <!-- Post Item Start -->
                <div class="post--item post--single text-center">
                    <!-- Post Slider Start -->
                    <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true"
                        data-owl-margin="10">
                        <img src="img/posts-img/post-slider-01.jpg" alt="">
                        <img src="img/posts-img/post-slider-02.jpg" alt="">
                        <img src="img/posts-img/post-slider-03.jpg" alt="">
                    </div>
                    <!-- Post Slider End -->

                    <!-- Post Meta Start -->
                    <div class="post--meta clearfix">
                        <p class="float--left">
                            <i class="fa fa-clock-o text-primary"></i>
                            <span>{{$Blog->created_at->format('d M Y')}}</span>
                            <a href="author.html">by John Doe</a>
                        </p>

                        <p class="float--right">
                            <i class="fa fa-eye text-primary"></i>
                            <span>{{$Blog->views}}&nbsp;views</span>
                        </p>
                    </div>
                    <!-- Post Meta End -->

                    <!-- Post Title Start -->
                    <div class="post--title">
                        <h2 class="h2">{{$Blog->title}}</h2>
                    </div>
                    <!-- Post Title End -->

                    <!-- Post Content Start -->
                    <div class="post--content clearfix">
                        {!!$Blog->description!!}
                    </div>
                    <!-- Post Content End -->

                    <!-- Post Footer Start -->
                    <div class="post--footer clearfix pt--40">

                                <!-- Post Tags Start -->
                                <ul class="post--tags nav float--left">
                                    <li><strong>Category:</strong></li>
                                    <li><a href="#">{{$Blog->Category->title}}</a></li>
                                </ul>
                        <!-- Post Categories End -->

                        <!-- Post Social Start -->
                        <ul class="post--social nav float--right">
                            <li><strong>Share On:</strong></li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&display=popup"
                                    title="Share on Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Google+"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- Post Social End -->
                    </div>
                    <!-- Post Footer End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="sidebar">

                    <div class="heading">
                        <h4 class="card-header">Related Post</h4>
                    </div>
                    <div class="sidebar_content">
                        {{-- <ul> --}}

                        @foreach ($Blog->Category->Blog as $blog)
                        @if ($blog->id != $Blog->id)
                        <div class="row ">
                            <div class="col-lg-4 col-xs-3">
                                <img src="{{asset('projects/'.$blog->thumbnail)}}" alt="{{$blog->title}}">
                            </div>
                            <div class="col-lg-8 col-xs-9 ">
                                <a class="related_post_text"
                                    href="{{route('FrontendPostView',$blog->slug)}}">{{$blog->title}}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="card_footer text-center">
                        <a href="{{route('FrontendPostAll')}}" title="View More Post">View More Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
@section('script_js')
<script src="{{asset('highlight/highlight.min.js')}}"></script>
<script>
    hljs.highlightAll();
</script>
@endsection