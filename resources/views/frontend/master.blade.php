<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/bloggypress/html/preview/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 06:03:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>BloggyPress - Responsive Personal Blog HTML5 Template</title>

    <!-- ==== Document Meta ==== -->
    <meta name="description" content="BloggyPress - Responsive Personal Blog HTML5 Template">
    <meta name="keywords" content="blog, blogging, personal, clean, modern, masonry, simple, html5, css3, template, responsive">
    <meta name="author" content="ThemeLooks">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPlayfair+Display:400,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{asset('highlight/monokai-sublime.min.css')}}">
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

    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="{asset('front/css/colors/color-1.css')}" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader" class="bg-primary">
        <div class="preloader--inner"></div>
    </div> -->
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Topbar Start -->
            <div class="header--topbar text-center text-white bg-dark fs--14">
                <div class="container">
                    <!-- Header Date Start -->
                    <div class="header--date">
                        <p>{{now()->format('D')}} <span class="text-primary">{{now()->format('d M ')}}</span> {{now()->format('Y')}}</p>
                    </div>
                    <!-- Header Date End -->

                    <!-- Header Search Bar Start -->
                    <div class="header--search-bar">
                        <form action="#" data-form="validate">
                            <input type="search" name="search" placeholder="Search..." class="form-control" required>

                            <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Search Bar End -->

                    <!-- Header Social Start -->
                    <div class="header--social">
                        <span>Follow Me:</span>

                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
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
                        <a href="index.html">
                            <img src="{asset{'front/img/logo.png'}}" alt="">
                        </a>
                    </div>
                    <!-- Header Logo End -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse text-center">
                        <!-- Header nav Links Start -->
                        <ul class="header--nav-links nav">
                            {{-- <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<i class="fa fa-caret-down"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                    <li class="active"><a href="index-3.html">Home Version 3</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{route('FrontendHome')}}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<i class="fa fa-caret-down"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-right.html">Blog Details Right</a></li>
                                    <li><a href="blog-details-left.html">Blog Details Left</a></li>
                                    <li><a href="author.html">Author</a></li>
                                    <li><a href="category.html">Category</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">Purchase</a></li>
                            <li><a href="404.html">404</a></li>
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
                        <a href="#">Back To Top<i class="fa fa-chevron-up"></i></a>
                    </div>
                    <!-- Back To Top Button End -->

                    <!-- Social Start -->
                    <div class="social">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
            <!-- Footer Topbar End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright text-center">
                <div class="container">
                    <p>Copyright &copy; <a href="#">ThemeBlogs</a>. All Rights Reserved.</p>
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
    <script src="{{asset('front/js/jquery.validate.min.js"')}}></script>

    <!-- ==== Match Height Plugin ==== -->
    <script src="{{asset('front/js/jquery.matchHeight-min.js')}}"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="{{asset('front/js/isotope.min.js')}}"></script>

    <!-- ==== Footer Reveal Plugin ==== -->
    <script src="{{asset('front/js/footer-reveal.min.js')}}"></script>

    <!-- ==== Retina Plugin ==== -->
    <script src="{{asset('front/js/retina.min.js')}}"></script>

    <!-- ==== Main Script ==== -->
    <script src="{{asset('front/js/main.js')}}"></script>

    <!-- ==== Color Switcher Script ==== -->
    <script src="{{asset('front/js/color-switcher.min.js')}}"></script>
    <script src="{{asset('highlight/highlight.min.js')}}"></script>')

</body>

<!-- Mirrored from themelooks.us/demo/bloggypress/html/preview/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 06:03:52 GMT -->

</html>