@extends('frontend.master')
@section('social_thumbnail')
<meta property="og:image" content="{{ asset('logo/'.$setting->logo) }}" />
<meta property="og:image:url" content="{{ asset('logo/'.$setting->logo) }}" />
<meta property="og:image:secure_url" content="{{ asset('logo/'.$setting->logo) }}" />
<meta name=”twitter:image” content="{{ asset('logo/'.$setting->logo) }}" />
<meta property="og:image:alt" content="{{$setting->meta_title}}" />
@endsection
@section('content')
<!-- Blog Section Start -->
<section class="section post_all">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row" data-trigger="fitrow">
                    @foreach ($blogs as $blog)
                    @if ($loop->index+1 < 3) <div class="col-sm-6 col-lg-6 col-sm-6 col-xs-12 pb--60">
                        <!-- Sticky Post Item Start -->
                        <div class="post--item   text-center">
                            <!-- Post Slider Start -->
                            <div class="post--img">
                                <a href="{{route('FrontendPostView',$blog->slug )}}"><img
                                        src="{{asset('projects/'.$blog->thumbnail)}}" alt="{{$blog->title}}"></a>
                            </div>
                            <!-- Post Slider End -->

                            <!-- Post Category Start -->
                            <div class="blog_content">

                                <div class="post--cat">
                                    <a href="{{route('FrontendCategoryWisePost',$blog->Category->slug)}}"
                                        data-overlay="0.5" data-overlay-color="primary">{{$blog->Category->title}}</a>
                                </div>
                                <!-- Post Category End -->

                                <!-- Post Title Start -->
                                <div class="post--title">
                                    <h2 class="h3"><a href="{{route('FrontendPostView',$blog->slug )}}"
                                            class="btn-link">{{$blog->title}}</a></h2>
                                </div>
                                <!-- Post Title End -->

                                <!-- Post Excerpt Start -->
                                <div class="post--excerpt">
                                    <p>{!!Str::limit($blog->description,100)!!}</p>
                                </div>
                                <!-- Post Excerpt End -->

                                <!-- Post Action Start -->
                                <div class="post--action">
                                    <a href="{{route('FrontendPostView',$blog->slug )}}" class="btn btn-default">Read More</a>
                                </div>
                                <!-- Post Action End -->

                                <!-- Post Meta Start -->
                                <div class="post--meta clearfix">
                                    <p class="float--left">
                                        <i class="fa fa-clock-o text-primary"></i>
                                        <span>{{$blog->created_at->format('d M Y')}}</span>
                                        <span>by <a href="https://mojiburrahaman.com/" target="_blank"
                                                title="Mojibur Rahaman"> Mojibur Rahaman</a></span>
                                    </p>

                                    <p class="float--right">
                                        <i class="fa fa-eye text-primary"></i>
                                        <span>{{$blog->views}}&nbsp;views</span>
                                    </p>
                                </div>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Sticky Post Item End -->
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-9 col-lg-9 col-xs-12">
            <div class="row" data-trigger="fitrow">
                @foreach ($blogs as $blog)
                @if ($loop->index+1 > 2)
                <div class="col-sm-6 col-xs-12 pb--60">
                    <!-- Post Item Start -->
                    <div class="post--item   text-center">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="{{route('FrontendPostView',$blog->slug )}}"><img
                                    src="{{asset('projects/'.$blog->thumbnail)}}" alt="{{$blog->title}}"></a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Category Start -->
                        <div class="blog_content">

                            <div class="post--cat">
                                <a href="{{route('FrontendCategoryWisePost',$blog->Category->slug)}}" data-overlay="0.5"
                                    data-overlay-color="primary">{{$blog->Category->title}}</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="{{route('FrontendPostView',$blog->slug )}}"
                                        class="btn-link">{{$blog->title}}</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>{!!Str::limit($blog->description,100)!!}</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="{{route('FrontendPostView',$blog->slug )}}" class="btn btn-default">Read
                                    More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>{{$blog->created_at->format('d M Y')}}</span>
                                    <span>by <a href="https://mojiburrahaman.com/" target="_blank"
                                            title="Mojibur Rahaman"> Mojibur Rahaman</a></span>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-eye text-primary"></i>
                                    <span>{{$blog->views}}&nbsp;views</span>
                                </p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                @endif
                @endforeach
            </div>
            <!-- Pager End -->
        </div>

        <div class="col-md-3 pb--60">
            <!-- Widget Start -->
            <div class="widget">
                <h2 class="h4 widget--title">About Me</h2>

                <!-- About Widget Start -->
                <div class="about--widget pb--3 text-center">
                    <div class="img">
                        <a href="https://mojiburrahaman.com/" target="_blank">
                            <img src="{{asset('Screenshot_২০২২০৩১৭_১৫৩৭২৩.png')}}" alt="" class="Mojibur Rahaman">
                        </a>
                    </div>

                    <div class="info">
                        <h3 class="name h5 text-primary"><a class="btn-link">Mojibur Rahaman</a></h3>

                        <p class="role">Full Stack Web Developer</p>
                    </div>
                    <br>
                    <div class="social--widget pb--5 text-center">
                        <ul class="nav">
                            <li><a target="_blank"  href="https://www.facebook.com/mojibur.rahaman736/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank"  href="https://github.com/MojiburRahaman"><i class="fa fa-github"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/mojibur-rahaman"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <div class="bio">
                        <p>I'm a full-stack web developer, proficient at building responsive web applications, mostly
                            experienced in php and Laravel framework . .</p>

                        <p><a target="_blank" href="https://mojiburrahaman.com/#contact">Contact Me</a></p>
                    </div>
                </div>
                <!-- About Widget End -->
            </div>
            <!-- Widget End -->

            <!-- Widget Start -->
            <div class="widget">
                <h2 class="h4 widget--title">Newsletter</h2>

                <!-- Newsletter Widget Start -->
                <div class="newsletter--widget pb--10 text-center">
                    <form id="contact-form" name="mc-embedded-subscribe-form" target="_blank">

                        <input type="email" name="EMAIL" placeholder="Your E-mail" class="form-control" id="email"
                            value="{{old('EMAIL')}}" autocomplete="off" required>

                        <button type="submit" class="btn btn-default">Subscribe Now</button>
                    </form>
                </div>
                <!-- Newsletter Widget End -->
            </div>
            <!-- Widget End -->
        </div>
    </div>
    {{-- </div> --}}
</section>
<!-- Blog Section End -->
@endsection
@section('script_js')
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" defer></script> --}}
<script>
    // alert('ok');
    @if (Cookie::get('contact_send') == '')
 $("#contact-form").submit(function(e) {
        e.preventDefault(); 
        var email = $('#email').val();
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '{{csrf_token()}}'
                }
                     }),
        $.ajax({
        url:'{{route('Subscribe')}}',
        type:'POST',
        data:{email:email},
    })
    .done(function(data){
        if(data.done == "Success"){
            Swal.fire(data.done);
        }else{
            Swal.fire(data.error.email[0]);
            return;
        }
        cache: false
    })
     .fail(function (xhr, status, error) {
    Swal.fire(status);
});
    
 });
 @endif
</script>
@endsection