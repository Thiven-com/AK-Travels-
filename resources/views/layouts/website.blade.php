<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords"
        content="creative, portfolio, agency, template, theme, designed, html5, html, css3, responsive, onepage" />
    <meta name="author" content="Set Private Limited" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>AK Explore and Experience LLP</title>


    <!------------------------------------------
      Main CSS File
    <------------------------------------------>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('website')}}/css/menu.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/custom-animation.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/responsive.css">

    <!-- Favicon -->
    <link href="{{asset('website')}}/images/fav.png" rel="shortcut icon" type="image/png">

</head>

<body>

    <div class="preloader"></div>

    <!-- Start Page Wrapper  -->
    <div class="page-wrapper">

        <!-- Header Section Start -->
        <header class="header header-style-1 clearfix">

            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <i class="flaticon-flash"></i>
                                        AK Explore and Experience LLP
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://whatsapp.com/channel/0029Vb6j2x0J3jv2axLvLK31" target="_blank"
                                            title="WhatsApp">
                                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                        </a></li>

                                    <li> <a href="https://www.facebook.com/share/1FLyMU7BbV/" target="_blank"
                                            title="Facebook">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </a></li>

                                    <li><a href="https://www.instagram.com/ak_exploreandexperience?igsh=MTkxanVob3Nyamticw=="
                                            target="_blank" title="Instagram"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>

                                    <li> <a href="https://www.aktravelsolutions.in" target="_blank" title="Website"><i
                                                class="fa fa-dribbble" aria-hidden="true"></i></a></li>

                                    <li><a href="https://youtube.com/@akexploreandexperience?si=zGFZ9nx__qJwICT6"
                                            target="_blank" title="YouTube">
                                            <i class="fab fa-youtube" aria-hidden="true"></i></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-style menu-style-1 bg-transparent clearfix">
                <!-- main-navigation start -->
                <div class="main-navigation main-mega-menu animated">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container">
                            <!-- header dropdown buttons end-->
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img id="logo_img" src="{{asset('website')}}/images/logo1.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <div class="collapse navbar-collapse" id="navbar-collapse-1">

                                <!-- main-menu -->
                                <ul class="navbar-nav ms-xl-auto">

                                    <!-- mega-menu end -->
                                    <li class="nav-item dropdown active">
                                        <a href="{{ route('home') }}" class="nav-link" aria-haspopup="true"
                                            aria-expanded="false">Home</a>
                                    </li>
                                    <!-- mega-menu start -->
                                    <li class="nav-item dropdown">
                                        <a href="{{ route('about') }}" class="nav-link" aria-haspopup="true"
                                            aria-expanded="false">About</a>
                                    </li>

                                    <!-- mega-menu end -->
                                    <li class="nav-item dropdown">
                                        <a href="{{ route('services') }}" class="nav-link" aria-haspopup="true"
                                            aria-expanded="false">Services</a>
                                    </li>
                                    <!-- mega-menu start -->

                                    <!-- mega-menu end -->
                                    <!-- <li class="nav-item dropdown">
                                        <a href="{{ route('places') }}" class="nav-link" aria-haspopup="true"
                                            aria-expanded="false">Places</a>
                                    </li> -->
                                    <!-- mega-menu start -->

                                    <li class="nav-item dropdown">
                                        <a href="{{ route('contact') }}" class="nav-link" aria-haspopup="true"
                                            aria-expanded="false">Contact</a>
                                    </li>

                                </ul>

                                <!-- header dropdown buttons -->
                                <div class="dropdown-buttons">
                                    <div class="btn-group menu-search-box">
                                        <button type="button" class="btn dropdown-toggle" id="header-drop-3"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="fa fa-search"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right dropdown-animation"
                                            aria-labelledby="header-drop-3">
                                            <li>
                                                <form role="search" class="search-box">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <i class="fa fa-search form-control-feedback"></i>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- <div class="btn-group">
                                        <button type="button" class="btn dropdown-toggle" id="header-drop-4"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="fa fa-shopping-bag"></i><span class="menu-cart">3</span></button>
                                        <ul class="dropdown-menu dropdown-menu-right cart dropdown-animation"
                                            aria-labelledby="header-drop-4">
                                            <li class="product-item">
                                                <img src="{{asset('website')}}/images/shop/1.jpg" alt="">
                                                <a href="#">product name</a>
                                                <span>49.00</span>
                                            </li>
                                            <li class="product-item">
                                                <img src="{{asset('website')}}/images/shop/2.jpg" alt="">
                                                <a href="#">product name</a>
                                                <span>80.00</span>
                                            </li>
                                            <li class="product-item">
                                                <img src="{{asset('website')}}/images/shop/2.jpg" alt="">
                                                <a href="#">product name</a>
                                                <span>80.00</span>
                                            </li>
                                            <li class="product-item">
                                                <span>120.30</span>
                                                <a class="btn-theme" href="shop-cart.html">View Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                    <!-- main-menu end -->

                                </div>
                            </div>
                    </nav>
                </div>
                <!-- main-navigation end -->
            </div>

        </header>
        <!-- Header Section End -->

        @yield('content')


        <!-- Footer Style Seven Start -->
        <footer class="bg-faded pt-70 pb-40 bg-theme-color-2">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-item footer-widget-one">
                                <img class="footer-logo mb-25" src="{{asset('website')}}/images/logo1.png" alt="">
                                <p>AK Travels – Explore & Experience is a premium travel brand dedicated to making every
                                    journey memorable.</p>
                                <hr>
                                <h6>Follow<span> Us</span></h6>
                                <ul class="social-icon bg-transparent bordered-theme">


                                    <li><a href="https://whatsapp.com/channel/0029Vb6j2x0J3jv2axLvLK31" target="_blank"
                                            title="WhatsApp">
                                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                        </a></li>

                                    <li> <a href="https://www.facebook.com/share/1FLyMU7BbV/" target="_blank"
                                            title="Facebook">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </a></li>

                                    <li><a href="https://www.instagram.com/ak_exploreandexperience?igsh=MTkxanVob3Nyamticw=="
                                            target="_blank" title="Instagram"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>

                                    <li> <a href="https://www.aktravelsolutions.in" target="_blank" title="Website"><i
                                                class="fa fa-dribbble" aria-hidden="true"></i></a></li>

                                    <li><a href="https://youtube.com/@akexploreandexperience?si=zGFZ9nx__qJwICT6"
                                            target="_blank" title="YouTube">
                                            <i class="fab fa-youtube" aria-hidden="true"></i></li>
                                    </a>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-item">
                                <div class="footer-title">
                                    <h4>Our <span>Services</span></h4>
                                    <div class="border-style-3"></div>
                                </div>
                                <ul class="footer-list">
                                    <li><a href="{{ route('services') }}">Fly Anywhere</a></li>
                                    <li><a href="{{ route('services') }}">Comfortable Stays</a></li>
                                    <li><a href="{{ route('services') }}">Travel Documentation</a></li>
                                    <li><a href="{{ route('services') }}">Romantic Escapes</a></li>

                                </ul>

                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-item">
                                <div class="footer-title">
                                    <h4>Usefull <span>Links</span></h4>
                                    <div class="border-style-3"></div>
                                </div>
                                <ul class="footer-list">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-item">
                                <div class="footer-title">
                                    <h4>Quick <span>Contact</span></h4>
                                    <div class="border-style-3"></div>
                                </div>
                                <ul class="footer-list footer-contact mb-10">
                                    <li><i class="pe-7s-call"></i> Phone:+91-9916170891 </li>

                                    <li><i class="pe-7s-mail"></i> <a href="mailto:">Email: aktravels@solutions.com</a>
                                    </li>
                                </ul>
                                <div class="footer-item">
                                    <h6>News <span>letter</span></h6>
                                    <div class="input-group subscribe-style-two">
                                        <input type="email" class="form-control input-subscribe mb-0"
                                            placeholder="Email">
                                        <span class="input-group-btn">
                                            <button class="btn btn-subscribe" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer-copy-right bg-theme-color-2 text-white p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>© 2026, All Rights Reserved, Design & Developed By:<a href="#"> ThiVen</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Style Seven End -->

    </div>
    <!-- End Page Wrapper  -->

    <a href="#" class="scrollup"><i class="flaticon-long-arrow-pointing-up" aria-hidden="true"></i></a>


    <!------------------------------------------
Main JavaScript
<------------------------------------------>
    <script src="{{asset('website')}}/js/modernizr.js"></script>
    <script src="{{asset('website')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('website')}}/js/jquery-migrate.js"></script>
    <script src="{{asset('website')}}/js/popper.min.js"></script>
    <script src="{{asset('website')}}/js/bootstrap.min.js"></script>


    <!-- Optional JavaScript -->
    <script src="{{asset('website')}}/js/bootstrap-dropdownhover.min.js"></script>
    <script src="{{asset('website')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('website')}}/js/magnific-popup.min.js"></script>
    <script src="{{asset('website')}}/js/jquery.fancybox.js"></script>
    <script src="{{asset('website')}}/js/player-min.js"></script>

    <!-- Custom JavaScript -->
    <script src="{{asset('website')}}/js/script.js"></script>

</body>

</html>