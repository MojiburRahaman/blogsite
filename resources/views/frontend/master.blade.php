<!DOCTYPE html>
<html dir="ltr" lang="en">

    <!-- Mirrored from themelooks.us/demo/bloggypress/html/preview/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 06:03:52 GMT -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ==== Document Title ==== -->
        <title>@yield('title',$setting->meta_title) </title>

        <!-- ==== Document Meta ==== -->
        <meta name="title" content="@yield('title',$setting->meta_title) ">
        <meta name="twitter:card" content="@yield('title',$setting->meta_title)">
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="@yield('title',$setting->meta_title)" />
        <meta name="description" content="@yield('meta_description',$setting->meta_description)">
        <meta name=”twitter:description” content="@yield('meta_description',$setting->meta_description)" />
        <meta name="keywords"
            content="@yield('meta_keyword',$setting->meta_keyword)">
        <meta name="author" content="ThemeLooks">
        @yield('social_thumbnail')
        <meta property="og:image:height" content="640" />
        <meta property="og:image:height" content="640" />
        <meta property="og:type" content="article" />
        <meta property="article:publisher" content="https://mojiburrahaman.com/" />
        
      

        <!-- ==== Favicon ==== -->
        <link rel="icon" href="{{asset('android-chrome-192x192.png')}}" type="image/png">
        {{-- <link rel="icon" href="{{asset('blog_logo.png')}}" type="image/png"> --}}

        <!-- ==== Google Font ==== -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPlayfair+Display:400,700">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Parisienne&display=swap" rel="stylesheet">
        <!-- ==== Font Awesome ==== -->
        <link rel="stylesheet" href="{{asset('highlight/monokai-sublime.min.css')}}" defer>
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

        <!-- ==== Bootstrap Framework ==== -->
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

        <!-- ==== Owl Carousel Plugin ==== -->
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">

        <!-- ==== Magnific Popup Plugin ==== -->
        <link rel="stylesheet" href="{{asset('front/css/magnific-popup.min.css')}}">

        <!-- ==== Main Stylesheet ==== -->
        <link rel="stylesheet" href="{{asset('front/style.css')}}">

        <!-- ==== Responsive Stylesheet ==== -->
        <link rel="stylesheet" href="{{asset('front/css/responsive-style.css')}}">


        <!-- ==== Custom Stylesheet ==== -->
        <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    </head>

    <body>

        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Header Section Start -->
            <header class="header--section">
                <!-- Header Topbar Start -->
                <div class="header--topbar text-center text-white bg-dark fs--14">
                    <div class="container">
                        <!-- Header Date Start -->
                        <div class="header--date">
                            <p>{{now()->format('D')}} <span class="text-primary">{{now()->format('d M ')}}</span>
                                {{now()->format('Y')}}
                            </p>
                        </div>
                        <!-- Header Date End -->

                        <!-- Header Search Bar Start -->
                        <div class="header--search-bar">
                            <form action="{{route('FrontendSearch')}}" data-form="validate">
                                <input type="search" name="keyword" placeholder="Search..." class="form-control"
                                    @if(url()->current() == route('FrontendSearch'))
                                value="{{session('keyword')}}"
                                @endif >

                                <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- Header Search Bar End -->

                        <!-- Header Social Start -->
                        <div class="header--social">
                            <span>Follow Me:</span>

                            <ul class="nav">
                                <li><a target="_blank" href="https://www.facebook.com/mojibur.rahaman736/"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://github.com/MojiburRahaman"><i class="fa fa-github"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/mojibur-rahaman"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Social End -->
                    </div>
                </div>
                <!-- Header Topbar End -->

                <!-- Header Navbar Start -->
                <nav class="header--navbar navbar">
                    <div class="container">
                        <!-- Header Logo Start -->
                        <div class="header--logo">
                            <a href="{{route('FrontendHome')}}">
                                <h1>MR</h1>
                                <p>A personal blog website</p>
                            </a>
                        </div>
                        <!-- Header Logo End -->

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#headerNav">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="headerNav" class="navbar-collapse collapse text-center">
                            <!-- Header nav Links Start -->
                            <ul class="header--nav-links nav">
                                <li class="{{ (url()->current()===route('FrontendHome')) ? 'active' : '' }}"><a
                                        href="{{route('FrontendHome')}}">Home</a></li>
                                <li class="{{ (url()->current()===route('FrontendPostAll')) ? 'active' : '' }}"> <a
                                        href="{{route('FrontendPostAll')}}">Post</a></li>
                                <li class="{{ (url()->current()===route('FrontendAllCategory')) ? 'active' : '' }}"> <a
                                        href="{{route('FrontendAllCategory')}}">Category</a></li>
                                <li><a target="_blank" href="https://mojiburrahaman.com/#contact">Contact</a></li>
                            </ul>
                            <!-- Header nav Links End -->
                        </div>
                    </div>
                </nav>
                <!-- Header Navbar End -->
            </header>
            <!-- Header Section End -->


            @yield('content')


            <!-- Footer Section Start -->
            <footer class="footer--section" data-trigger="footer-reveal">
                <!-- Footer Topbar Start -->
                <div class="footer--topbar text-center pt--50 pb--50">
                    <div class="container">
                        <!-- Back To Top Button Start -->
                        <div class="back-to-top-btn">
                            <a href="">Back To Top<i class="fa fa-chevron-up"></i></a>
                        </div>
                        <!-- Back To Top Button End -->

                        <!-- Social Start -->
                        <div class="social">
                            <ul class="nav">
                                <li><a href="https://www.facebook.com/mojibur.rahaman736/"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/MojiburRahaman"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/mojibur-rahaman "><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social End -->
                    </div>
                </div>
                <!-- Footer Topbar End -->

                <!-- Footer Copyright Start -->
                <div class="footer--copyright text-center">
                    <div class="container">
                        <p>Copyright &copy; <a href="{{route('FrontendHome')}}">{{config('app.name')}}</a>. All Rights
                            Reserved.</p>
                    </div>
                </div>
                <!-- Footer Copyright End -->
            </footer>
            <!-- Footer Section End -->
        </div>
        <!-- Wrapper End -->

        <!-- ==== jQuery Library ==== -->
        <script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>

        <!-- ==== Bootstrap Framework ==== -->
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

        <!-- ==== Owl Carousel Plugin ==== -->
        <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>

        <!-- ==== Magnific Popup Plugin ==== -->
        <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>

        <!-- ==== Validation Plugin ==== -->
        <script src="{{asset('front/js/jquery.validate.min.js')}}"></script>

        <!-- ==== Match Height Plugin ==== -->
        {{-- <script src="{{asset('front/js/jquery.matchHeight-min.js')}}"></script> --}}

        <!-- ==== Isotope Plugin ==== -->
        <script src="{{asset('front/js/isotope.min.js')}}"></script>

        <!-- ==== Footer Reveal Plugin ==== -->
        <script src="{{asset('front/js/footer-reveal.min.js')}}"></script>

        <!-- ==== Retina Plugin ==== -->
        {{-- <script src="{{asset('front/js/retina.min.js')}}"></script> --}}

        <!-- ==== Main Script ==== -->
        <script src="{{asset('front/js/main.js')}}"></script>
        <script src="{{asset('highlight/highlight.min.js')}}" defer></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
        @yield('script_js')


    </body>

    <!-- Mirrored from themelooks.us/demo/bloggypress/html/preview/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 06:03:52 GMT -->

</html>