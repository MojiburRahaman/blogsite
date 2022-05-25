@extends('frontend.master')
@section('title')
{{$Blog->title}} @endsection
@section('meta_description')
{{$Blog->meta_description}} @endsection
@section('meta_keyword')
{{$Blog->meta_keyword}} @endsection
@section('social_thumbnail')
<meta property="og:image" content="{{ asset('projects/' . $Blog->thumbnail) }}" />
<meta property="og:image:url" content="{{ asset('projects/' . $Blog->thumbnail) }}" />
<meta name=”twitter:image” content="{{ asset('projects/' . $Blog->thumbnail) }}}" />
<meta property="og:image:secure_url" content="{{ asset('projects/' . $Blog->thumbnail) }}" />
<meta property="article:published_time" content="{{$Blog->created_at}}" />

@endsection
@section('content')
<section class="section  post_all">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pb--60">
                <!-- Post Item Start -->
                <div class="post--item post--single text-center">

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
                            <li><a href="{{route('FrontendCategoryWisePost',$Blog->Category->slug)}}">{{$Blog->Category->title}}</a></li>
                        </ul>
                        <!-- Post Categories End -->

                        <!-- Post Social Start -->
                        <ul class="post--social nav float--right">
                            <li><strong>Share On:</strong></li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&display=popup"
                                    title="Share on Facebook"><i class="fa fa-facebook"></i></a>
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
<script>
    hljs.highlightAll();
</script>
@endsection