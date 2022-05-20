@extends('frontend.master')

@section('content')
   <!-- Blog Section Start -->
   <section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row" data-trigger="fitrow">
                    @foreach ($blogs as $blog)
                        @if ($loop->index+1 < 3)
                            
                        <div class="col-sm-6 col-lg-6 col-sm-6 col-xs-12 pb--60">
                            <!-- Sticky Post Item Start -->
                            <div class="post--item sticky text-center">
                                <!-- Post Slider Start -->
                                <div class="post--img">
                                    <a href="{{route('FrontendPostView',$blog->slug )}}"><img style="height: 100%" src="{{asset('projects/'.$blog->thumbnail)}}" alt=""></a>
                                </div>
                                <!-- Post Slider End -->
    
                                <!-- Post Category Start -->
                                <div class="post--cat">
                                    <a href="#" data-overlay="0.5" data-overlay-color="primary">{{$blog->Category->title}}</a>
                                </div>
                                <!-- Post Category End -->
    
                                <!-- Post Title Start -->
                                <div class="post--title">
                                    <h2 class="h3"><a href="{{route('FrontendPostView',$blog->slug )}}" class="btn-link">{{$blog->title}}</a></h2>
                                </div>
                                <!-- Post Title End -->
    
                                <!-- Post Excerpt Start -->
                                <div class="post--excerpt">
                                    <p>{!!Str::limit($blog->description,250)!!}</p>
                                </div>
                                <!-- Post Excerpt End -->
    
                                <!-- Post Action Start -->
                                <div class="post--action">
                                    <a href="blog-details.html" class="btn btn-default">Read More</a>
                                </div>
                                <!-- Post Action End -->
    
                                <!-- Post Meta Start -->
                                <div class="post--meta clearfix">
                                    <p class="float--left">
                                        <i class="fa fa-clock-o text-primary"></i>
                                        <span>{{$blog->created_at->format('d M Y')}}</span>
                                        <span>by <a href="#"> John Doe</a></span>
                                    </p>
    
                                    <p class="float--right">
                                        <i class="fa fa-heart-o text-primary"></i>
                                        <span>112</span>
                                    </p>
    
                                    <p class="float--right">
                                        <i class="fa fa-eye text-primary"></i>
                                        <span>{{$blog->views}}</span>
                                    </p>
                                </div>
                                <!-- Post Meta End -->
                            </div>
                            <!-- Sticky Post Item End -->
                        </div>
                        @endif

                    {{-- <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="blog-details.html"><img src="{{asset('projects/'.$blog->thumbnail)}}" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">{{$blog->Category->title}}</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">{{$blog->title}}</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>{!!Str::limit($blog->description,200)!!}</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>{{$blog->created_at->format('d M Y')}}</span>
                                    <span>by <a href="#"> John Doe</a></span>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-eye text-primary"></i>
                                    <span>{{$blog->views}}</span>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div> --}}
                    @endforeach

                    {{-- <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Video Start -->
                            <div class="post--video">
                                <iframe src="http://www.youtube.com/embed/YE7VzlLtp-4?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent"></iframe>
                            </div>
                            <!-- Post Video End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-12 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Video Start -->
                            <div class="post--video">
                                <iframe src="http://player.vimeo.com/video/154190504?byline=0&amp;portrait=0&amp;title=0"></iframe>
                            </div>
                            <!-- Post Video End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Audio Start -->
                            <div class="post--audio">
                                <iframe src="http://w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/34019569&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_reposts=false&amp;visual=true&amp;sharing=false&amp;download=false"></iframe>
                            </div>
                            <!-- Post Audio End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div> --}}
                </div>
            </div>
            <div class="col-md-8">
                <div class="row" data-trigger="fitrow">
                    @foreach ($blogs as $blog)
                        {{-- @if ($loop->index+1 == 1)
                            
                        <div class="col-sm-12 col-xs-12 pb--60">
                            <!-- Sticky Post Item Start -->
                            <div class="post--item sticky text-center">
                                <!-- Post Slider Start -->
                                <div class="post--img">
                                    <a href="blog-details.html"><img src="{{asset('projects/'.$blog->thumbnail)}}" alt=""></a>
                                </div>
                                <!-- Post Slider End -->
    
                                <!-- Post Category Start -->
                                <div class="post--cat">
                                    <a href="#" data-overlay="0.5" data-overlay-color="primary">{{$blog->Category->title}}</a>
                                </div>
                                <!-- Post Category End -->
    
                                <!-- Post Title Start -->
                                <div class="post--title">
                                    <h2 class="h3"><a href="blog-details.html" class="btn-link">{{$blog->title}}</a></h2>
                                </div>
                                <!-- Post Title End -->
    
                                <!-- Post Excerpt Start -->
                                <div class="post--excerpt">
                                    <p>{!!Str::limit($blog->description,250)!!}</p>
                                </div>
                                <!-- Post Excerpt End -->
    
                                <!-- Post Action Start -->
                                <div class="post--action">
                                    <a href="blog-details.html" class="btn btn-default">Read More</a>
                                </div>
                                <!-- Post Action End -->
    
                                <!-- Post Meta Start -->
                                <div class="post--meta clearfix">
                                    <p class="float--left">
                                        <i class="fa fa-clock-o text-primary"></i>
                                        <span>12 June 2017</span>
                                        <span>by <a href="#"> John Doe</a></span>
                                    </p>
    
                                    <p class="float--right">
                                        <i class="fa fa-eye text-primary"></i>
                                        <span>{{$blog->views}}</span>
                                    </p>
    
                                    <p class="float--right">
                                        <a href="blog-details.html#comments" class="btn-link">
                                            <i class="fa fa-comments-o text-primary"></i>
                                            <span>52</span>
                                        </a>
                                    </p>
                                </div>
                                <!-- Post Meta End -->
                            </div>
                            <!-- Sticky Post Item End -->
                        </div>
                        @endif --}}
                        @if ($loop->index+1 > 2)
                    <div class="col-sm-6 col-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="{{route('FrontendPostView',$blog->slug )}}"><img src="{{asset('projects/'.$blog->thumbnail)}}" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">{{$blog->Category->title}}</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="{{route('FrontendPostView',$blog->slug )}}" class="btn-link">{{$blog->title}}</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>{!!Str::limit($blog->description,200)!!}</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>{{$blog->created_at->format('d M Y')}}</span>
                                    <span>by <a href="#"> John Doe</a></span>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-eye text-primary"></i>
                                    <span>{{$blog->views}}</span>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                    @endif
                    @endforeach

                    {{-- <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Video Start -->
                            <div class="post--video">
                                <iframe src="http://www.youtube.com/embed/YE7VzlLtp-4?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent"></iframe>
                            </div>
                            <!-- Post Video End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-12 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Video Start -->
                            <div class="post--video">
                                <iframe src="http://player.vimeo.com/video/154190504?byline=0&amp;portrait=0&amp;title=0"></iframe>
                            </div>
                            <!-- Post Video End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Audio Start -->
                            <div class="post--audio">
                                <iframe src="http://w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/34019569&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_reposts=false&amp;visual=true&amp;sharing=false&amp;download=false"></iframe>
                            </div>
                            <!-- Post Audio End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div> --}}
                </div>

                <!-- Pager Start -->
                <div class="pager--wrapper pb--50">
                    <ul class="pager nav ff--primary">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                        <li><a href="#">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
                <!-- Pager End -->
            </div>

            <div class="col-md-4 pb--60">
                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">About Me</h2>

                    <!-- About Widget Start -->
                    <div class="about--widget pb--3 text-center">
                        <div class="img">
                            <a href="about.html">
                                <img src="img/widgets-img/about-avatar.jpg" alt="" class="img-circle">
                            </a>
                        </div>

                        <div class="info">
                            <h3 class="name h5 text-primary"><a href="about.html" class="btn-link">Karen Rosalie</a></h3>

                            <p class="role">Photographer &amp; Blogger</p>
                        </div>

                        <div class="social">
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi veritatis sapiente emit poribus...</p>

                            <p><a href="about.html">Read More</a></p>
                        </div>
                    </div>
                    <!-- About Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">My Socials</h2>

                    <!-- Social Widget Start -->
                    <div class="social--widget pb--5 text-center">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Newsletter</h2>

                    <!-- Newsletter Widget Start -->
                    <div class="newsletter--widget pb--10 text-center">
                        <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                            <p class="fs--14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <input type="email" name="EMAIL" placeholder="Your E-mail" class="form-control" autocomplete="off" required>

                            <button type="submit" class="btn btn-default">Subscribe Now</button>
                        </form>
                    </div>
                    <!-- Newsletter Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Editor's Picks</h2>

                    <!-- Post Widget Start -->
                    <div class="post--widget pb--3 text-center">
                        <div class="img">
                            <a href="blog-details.html"><img src="img/widgets-img/editor-pick.jpg" alt=""></a>
                        </div>

                        <div class="cat text-white" data-overlay="0.5" data-overlay-color="primary">
                            <p><a href="#" class="btn-link">Travel</a></p>
                        </div>

                        <div class="title">
                            <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be There</a></h3>
                        </div>

                        <div class="meta">
                            <p><i class="fa fa-clock-o text-primary"></i> 12 June 2017 <a href="#">by John Doe</a></p>
                        </div>
                    </div>
                    <!-- Post Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Popular Posts</h2>

                    <!-- Posts Widget Start -->
                    <div class="posts--widget pb--10">
                        <ul class="nav">
                            <li class="clearfix">
                                <div class="img">
                                    <a href="blog-details.html"><img src="img/widgets-img/latest-post-01.jpg" alt=""></a>
                                </div>

                                <div class="info">
                                    <a href="#" class="cat" data-overlay="0.5" data-overlay-color="primary">Travel</a>

                                    <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be There</a></h3>

                                    <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="#" class="btn-link">12 June 2017</a></p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="img">
                                    <a href="blog-details.html"><img src="img/widgets-img/latest-post-02.jpg" alt=""></a>
                                </div>

                                <div class="info">
                                    <a href="#" class="cat" data-overlay="0.5" data-overlay-color="primary">Travel</a>

                                    <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be There</a></h3>

                                    <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="#" class="btn-link">12 June 2017</a></p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="img">
                                    <a href="blog-details.html"><img src="img/widgets-img/latest-post-03.jpg" alt=""></a>
                                </div>

                                <div class="info">
                                    <a href="#" class="cat" data-overlay="0.5" data-overlay-color="primary">Travel</a>

                                    <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be There</a></h3>

                                    <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="#" class="btn-link">12 June 2017</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Posts Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Flicker</h2>

                    <!-- Flicker Widget Start -->
                    <div class="flicker--widget" data-trigger="gallery_popup">
                        <div class="row gutter--10">
                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-01.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-02.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-03.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-04.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-05.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-06.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-07.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-08.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="img/widgets-img/flicker-img-09.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Flicker Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Categories</h2>

                    <!-- Links Widget Start -->
                    <div class="links--widget pb--10">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <span class="text">Travel</span>
                                    <span class="count">5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Music</span>
                                    <span class="count">7</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Foods</span>
                                    <span class="count">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Nature</span>
                                    <span class="count">14</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Beauty</span>
                                    <span class="count">6</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Links Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Archives</h2>

                    <!-- Links Widget Start -->
                    <div class="links--widget">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <span class="text">March 2017</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">February 2017</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">January 2017</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Links Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <!-- Ad Widget Start -->
                    <div class="ad--widget pb--10">
                        <a href="#" target="_blank">
                            <img src="img/widgets-img/ad-widget.jpg" alt="">
                        </a>
                    </div>
                    <!-- Ad Widget End -->
                </div>
                <!-- Widget End -->
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection

