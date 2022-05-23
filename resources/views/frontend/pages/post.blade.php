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
            <div class="col-md-8 ">
                <!-- Post Item Start -->
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
                        -webkit-box-shadow: 8px 10px 15px -7px rgba(0,0,0,0.57); 
box-shadow: 8px 10px 15px -7px rgba(0,0,0,0.57);
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
                            <a href="https://www.laravelcode.com/category/python"
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
                            <span class="post-author"> <i class="fa fa-user"></i> &nbsp;<a href="">Mojibur Rahaman</a></span>

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

            <!-- Related Posts Start -->
            <div class="related--posts pt--50">
                <div class="related--posts-title text-uppercase text-center">
                    <h2 class="h5">You may also like</h2>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="#"><img src="img/posts-img/post-slider-01.jpg" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Title Start -->
                            <div class="post--title text-center">
                                <h3 class="h5"><a href="#" class="btn-link">Love Is Everything</a></h3>
                            </div>
                            <!-- Post Title End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="#"><img src="img/posts-img/post-slider-02.jpg" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Title Start -->
                            <div class="post--title text-center">
                                <h3 class="h5"><a href="#" class="btn-link">Interview with Paris Girl on Monmartre</a>
                                </h3>
                            </div>
                            <!-- Post Title End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="#"><img src="img/posts-img/post-slider-03.jpg" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Title Start -->
                            <div class="post--title text-center">
                                <h3 class="h5"><a href="#" class="btn-link">Girl Love Music At Home</a></h3>
                            </div>
                            <!-- Post Title End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                </div>
            </div>
            <!-- Related Posts End -->

            <!-- Post Comments Start -->
            <div id="comments" class="post--comments pt--40">
                <div class="post--comments-title text-uppercase text-center">
                    <h2 class="h5">03 Comments</h2>
                </div>

                <!-- Comment Items Start -->
                <ul class="comment--items">
                    <li>
                        <!-- Comment Item Start -->
                        <div class="comment--item clearfix">
                            <div class="comment--img float--left">
                                <img src="img/blog-img/comment-avatar-01.jpg" alt="" class="img-circle">
                            </div>

                            <div class="comment--info ov--h">
                                <div class="comment--header clearfix">
                                    <a href="#" class="reply btn-link float--right">Reply</a>

                                    <h3 class="name h5">Jesmin Martin</h3>

                                    <p class="date">June 17, 2017 at 9:00 am</p>
                                </div>

                                <div class="comment--content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nemo minus
                                        non sunt corporis modi vitae perferendis beatae.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Item End -->

                        <!-- Comment Items Start -->
                        <ul class="comment--items">
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left">
                                        <img src="img/blog-img/comment-avatar-02.jpg" alt="" class="img-circle">
                                    </div>

                                    <div class="comment--info ov--h">
                                        <div class="comment--header clearfix">
                                            <a href="#" class="reply btn-link float--right">Reply</a>

                                            <h3 class="name h5">Michel Hocks</h3>

                                            <p class="date">June 17, 2017 at 9:00 am</p>
                                        </div>

                                        <div class="comment--content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nemo
                                                minus non sunt corporis modi vitae perferendis beatae.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->
                            </li>
                        </ul>
                        <!-- Comment Items End -->
                    </li>

                    <li>
                        <!-- Comment Item Start -->
                        <div class="comment--item clearfix">
                            <div class="comment--img float--left">
                                <img src="img/blog-img/comment-avatar-03.jpg" alt="" class="img-circle">
                            </div>

                            <div class="comment--info ov--h">
                                <div class="comment--header clearfix">
                                    <a href="#" class="reply btn-link float--right">Reply</a>

                                    <h3 class="name h5">Roy Morris</h3>

                                    <p class="date">June 17, 2017 at 9:00 am</p>
                                </div>

                                <div class="comment--content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nemo minus
                                        non sunt corporis modi vitae perferendis beatae.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Item End -->
                    </li>
                </ul>
                <!-- Comment Items End -->
            </div>
            <!-- Post Comments End -->

            <!-- Post Comment Form Start -->
            <div class="post--comment-form pt--40">
                <!-- Comment Respond Start -->
                <div class="comment--respond">
                    <div class="comment--respond-title text-uppercase text-center">
                        <h2 class="h5">Leave Comments</h2>
                    </div>

                    <form action="#" data-form="validate">
                        <div class="form-group">
                            <textarea name="comment" placeholder="Your Comment" class="form-control"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="website" placeholder="Website" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-default">Post Comment</button>
                    </form>
                </div>
                <!-- Comment Respond End -->
            </div>
            <!-- Post Comment Form End -->
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi veritatis sapiente emit
                            poribus...</p>

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
                    <form
                        action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                        method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                        <p class="fs--14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        <input type="email" name="EMAIL" placeholder="Your E-mail" class="form-control"
                            autocomplete="off" required>

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
                        <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be There</a>
                        </h3>
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

                                <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be
                                        There</a></h3>

                                <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="#"
                                        class="btn-link">12
                                        June 2017</a></p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <a href="blog-details.html"><img src="img/widgets-img/latest-post-02.jpg" alt=""></a>
                            </div>

                            <div class="info">
                                <a href="#" class="cat" data-overlay="0.5" data-overlay-color="primary">Travel</a>

                                <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be
                                        There</a></h3>

                                <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="#"
                                        class="btn-link">12
                                        June 2017</a></p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="img">
                                <a href="blog-details.html"><img src="img/widgets-img/latest-post-03.jpg" alt=""></a>
                            </div>

                            <div class="info">
                                <a href="#" class="cat" data-overlay="0.5" data-overlay-color="primary">Travel</a>

                                <h3 class="h5"><a href="blog-details.html" class="btn-link">Wherever You Go, I'll Be
                                        There</a></h3>

                                <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="#"
                                        class="btn-link">12
                                        June 2017</a></p>
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