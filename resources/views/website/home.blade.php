@extends('layouts.website')
@section('content')

    <!-- Home Section Start -->
    <section class="slider-wrapper st-two p-0">
        <div id="slider-style-one" class="carousel slide bs-slider control-round" data-bs-ride="carousel">

            <!-- Wrapper For Slides -->
            <div class="carousel-inner">

                <!-- Item Slide -->
                <div class="carousel-item active">

                    <!-- Slide Background -->
                    <img src="{{asset('website')}}/images/slider/1.jpg" alt="Slider Images" class="slide-image" />
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide-style-left st-two">
                            <h1>Get a tour</h1>
                            <h2>At AK Explore and Experience, <span>we aim</span> to make every <span>journey smooth</span>
                            </h2>
                        </div>
                        <!-- Package Box -->
                        <div class="package-box">
                            <h3 style="color: #fff;"><span style="color: #df2b18;">Exclusive</span> Offers</h3><br>
                            <h5 style="color: #ffcd22;">Available on All Services</h5><br><br>
                            <a href="{{ route('services') }}">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Item Slide -->
                <div class="carousel-item">

                    <!-- Slide Background -->
                    <img src="{{asset('website')}}/images/slider/2.jpg" alt="Slider Images" class="slide-image" />
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide-style-right st-two">
                            <h1>Get a tour</h1>
                            <h2>Stay tuned as we bring you the <span>best deals</span> personalized <span>services</span>
                            </h2>
                        </div><!-- Package Box -->
                        <div class="package-box slide-style-right">
                            <h3 style="color: #fff;"><span style="color: #df2b18;">Exclusive</span> Offers</h3><br>
                            <h5 style="color: #ffcd22;">Available on All Services</h5><br><br>
                            <a href="{{ route('services') }}">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Item Slide -->
                <div class="carousel-item">

                    <!-- Slide Background -->
                    <img src="{{asset('website')}}/images/slider/3.jpg" alt="Slider Images" class="slide-image" />
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide-style-center st-two">
                            <h1>Get a tour</h1>
                            <h2>Explore more, <span>Experience better</span> — with AK Explore and Experience LLP.</h2>

                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control carousel-control-prev" type="button" data-bs-target="#slider-style-one"
                data-bs-slide="prev" role="button">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control carousel-control-next" type="button" data-bs-target="#slider-style-one"
                data-bs-slide="next" role="button">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  slider-style-one Slider -->
    </section>
    <!-- Home Section End -->

    <!-- Welcome Section Start -->
    <section class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-wrp">
                        <div class="icon-box">
                            <i class="fa fa-plane"></i>
                            <h5>FLIGHT BOOKING</h5>
                            <a href="#">view more</a>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-hotel"></i>
                            <h5>Hotel Reservations</h5>
                            <a href="#">view more</a>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-globe"></i>
                            <h5>VISA</h5>
                            <a href="#">view more</a>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-umbrella"></i>
                            <h5>Holiday Packages</h5>
                            <a href="#">view more</a>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-helicopter"></i>
                            <h5>Charter Services</h5>
                            <a href="#">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Section End -->

    <!-- Special Places Section Start -->
    {{-- <section class="special-places-sec pb-80">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Welcome to Touran Travel</h4>
                    <h2>Special <span>Tour</span> Places</h2>
                    <p>Deserunt quia ducimus ut illum optio cum eum voluptate corrupti numquam</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-style">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="plc-asia-tab" data-bs-toggle="tab" href="#plc-asia"
                                    role="tab" aria-controls="plc-asia" aria-selected="true">Asia</a>
                                <a class="nav-item nav-link" id="plc-urope-tab" data-bs-toggle="tab" href="#plc-urope"
                                    role="tab" aria-controls="plc-urope" aria-selected="false">Urope</a>
                                <a class="nav-item nav-link" id="plc-africa-tab" data-bs-toggle="tab" href="#plc-africa"
                                    role="tab" aria-controls="plc-africa" aria-selected="false">Africa</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- item start -->
                            <div class="tab-pane fade show active" id="plc-asia" role="tabpanel"
                                aria-labelledby="plc-asia-tab">
                                <div class="specialplaces_carousel owl-carousel owl-theme owl-navst st-two">
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/1.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Redilova Tour Place</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/2.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Mountain adventure</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/3.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>adventure swimming</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/4.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Ratargul gorgeous</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <!-- item start -->
                            <div class="tab-pane fade" id="plc-urope" role="tabpanel" aria-labelledby="plc-urope-tab">
                                <div class="specialplaces_carousel owl-carousel owl-theme owl-navst st-two">
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/1.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Redilova Tour Place</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/2.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Mountain adventure</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/3.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>adventure swimming</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/4.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Ratargul gorgeous</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <!-- item start -->
                            <div class="tab-pane fade" id="plc-africa" role="tabpanel" aria-labelledby="plc-africa-tab">
                                <div class="specialplaces_carousel owl-carousel owl-theme owl-navst st-two">
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/1.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Redilova Tour Place</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/2.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Mountain adventure</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/3.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Adventure swimming</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="special-places">
                                            <div class="thumb">
                                                <img src="{{asset('website')}}/images/service/4.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price-box">
                                                    <h5><span>₹</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Ratargul gorgeous</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                                <ul class="info">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                </ul>
                                                <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente,
                                                    magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                                <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                <a class="btn-theme" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Special Places Section End -->

    <!-- Features Section Start -->
    <section class="feature-section over-layer-black pt-85 pb-90">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Why Choose Us?</h4>
                    <h2>Why <span>Travel</span> With Us</h2>
                    <p>We are committed to delivering seamless, memorable, and hassle-free travel experiences with trusted
                        service and personalized care.</p>
                </div>
            </div>

            <div class="row">

                <!-- Personalized Travel Planning -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-map"></i>
                        </div>
                        <div class="content">
                            <h3>Personalized <span>Travel Planning</span></h3>
                            <p>Customized travel itineraries designed to match your preferences, budget, and travel goals.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Transparent Pricing -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-wallet"></i>
                        </div>
                        <div class="content">
                            <h3>Transparent <span>Pricing</span></h3>
                            <p>Enjoy honest pricing with no hidden charges, ensuring complete transparency from booking to
                                travel.</p>
                        </div>
                    </div>
                </div>

                <!-- Dedicated Customer Support -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-support"></i>
                        </div>
                        <div class="content">
                            <h3>Dedicated <span>Customer Support</span></h3>
                            <p>Our friendly support team is available to assist you before, during, and after your journey.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Carefully Curated Travel Experiences -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-world"></i>
                        </div>
                        <div class="content">
                            <h3>Curated <span>Travel Experiences</span></h3>
                            <p>Every destination and itinerary is thoughtfully selected to provide unforgettable travel
                                memories.</p>
                        </div>
                    </div>
                </div>

                <!-- Reliable Travel Partners -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="content">
                            <h3>Reliable <span>Travel Partners</span></h3>
                            <p>We collaborate with trusted airlines, hotels, and local partners to ensure quality service.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- End-to-End Travel Assistance -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-airplane"></i>
                        </div>
                        <div class="content">
                            <h3>End-to-End <span>Travel Assistance</span></h3>
                            <p>From planning and booking to your return journey, we provide complete travel support.</p>
                        </div>
                    </div>
                </div>

                <!-- Commitment to Customer Satisfaction -->
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="feature-item last">
                        <div class="icon-box">
                            <i class="flaticon-like"></i>
                        </div>
                        <div class="content">
                            <h3>Customer <span>Satisfaction</span></h3>
                            <p>Your happiness is our priority, and we strive to exceed your expectations with every trip.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Special Packages Section Start -->
    <section class="special-packages-sec pt-85 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="section-title stitle-left">
                        <h4>Our Special Services</h4>
                        <h2>Exceptional <span>Travel Services</span> We Offer</h2>

                        <p>We offer comprehensive travel solutions tailored to your needs, ensuring every journey is
                            seamless, stress-free, and unforgettable. From flight bookings and visa assistance to customized
                            holiday packages and luxury travel, our dedicated team is committed to delivering exceptional
                            service at every step.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style=" margin-top: 50px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="specialpackages_carousel owl-carousel owl-theme owl-navst">
                                <div class="item">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{asset('website')}}/images/domi.png" alt="">
                                            <!-- <div class="offer-price"> Off 40%</div> -->
                                            <div class="post-title-box" style="text-align: center;">

                                                <h4> Domestic & International</h4>



                                            </div>
                                        </div>
                                        <div class="content">
                                            <!-- <ul class="info">
                                                                        <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                        <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                        <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                    </ul> -->
                                            <p>Explore destinations worldwide with reliable flight booking services,
                                                offering the best fares, convenient schedules, and personalized travel
                                                assistance.</p>
                                            <!-- <div class="small-hotel">
                                                                        <div class="text">
                                                                            <h6>Fly Anywhere</h6>
                                                                            <h5>Domestic & International Flight Bookings</h5>
                                                                            <ul>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                                                                <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                                                                <li><a href="#">(3 Ratings)</a></li>
                                                                            </ul>
                                                                            <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on
                                                                                Map</a>
                                                                        </div>
                                                                        <div class="thumb">
                                                                            <img src="{{asset('website')}}/images/features/sm1.jpg" alt="">
                                                                            <img src="{{asset('website')}}/images/features/sm2.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{asset('website')}}/images/jetp.jpg" alt="">
                                            <!-- <div class="offer-price"> Off 40%</div> -->
                                            <div class="post-title-box" style="text-align: center;">


                                                <h4>Private Jets & Helicopter Services</h4>


                                            </div>
                                        </div>
                                        <div class="content">
                                            <!-- <ul class="info">
                                                                        <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                        <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                        <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                    </ul> -->
                                            <p>Enjoy personalized air travel with private jets and helicopter charters,
                                                ensuring luxury, convenience, and efficient journeys to your desired
                                                destinations.</p>
                                            <!-- <div class="small-hotel">
                                                                        <div class="text">
                                                                            <h6>Exclusive Air Charter</h6>
                                                                            <h5>Private Jets & Helicopter Services</h5>
                                                                            <ul>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                                                                <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                                                                <li><a href="#">(3 Ratings)</a></li>
                                                                            </ul>
                                                                            <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on
                                                                                Map</a>
                                                                        </div>
                                                                        <div class="thumb">
                                                                            <img src="{{asset('website')}}/images/features/sm1.jpg" alt="">
                                                                            <img src="{{asset('website')}}/images/features/sm2.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{asset('website')}}/images/ctp.jpg" alt="">
                                            <!-- <div class="offer-price"> Off 40%</div> -->
                                            <div class="post-title-box" style="text-align: center;">


                                                <h4>Customized & Holiday Packages</h4>


                                            </div>
                                        </div>
                                        <div class="content">
                                            <!-- <ul class="info">
                                                                        <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                        <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                        <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                    </ul> -->
                                            <p>From relaxing beach vacations to exciting adventure tours, enjoy customized
                                                holiday packages crafted to suit your travel preferences and schedule.</p>
                                            <!-- <div class="small-hotel">
                                                                        <div class="text">
                                                                            <h6>Personalized Travel Plans</h6>
                                                                            <h5>Customized Holiday Packages</h5>
                                                                            <ul>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                                                                <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                                                                <li><a href="#">(3 Ratings)</a></li>
                                                                            </ul>
                                                                            <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on
                                                                                Map</a>
                                                                        </div>
                                                                        <div class="thumb">
                                                                            <img src="{{asset('website')}}/images/features/sm1.jpg" alt="">
                                                                            <img src="{{asset('website')}}/images/features/sm2.jpg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                                <div class="add-box thumb">
                                    <img src="{{asset('website')}}/images/features/ad-1.png" alt="">
                                </div>
                            </div> -->
            </div>
        </div>
    </section>
    <!-- Special Packages Section End -->

    <!-- Funfact Section Start -->
    <section class="funfact-section over-layer-black pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-sec">
                        <h2>Trusted <span>Travel</span> Excellence </h2>
                        <p> Delivering exceptional travel experiences with personalized service, trusted partnerships, and a
                            commitment to customer satisfaction every step of the way.</p>
                        <div class="video-content">
                            <img src="{{asset('website')}}/images/photos/video-img.png" alt="image">
                            <!-- <div class="overlay">
                                                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-youtube"><i
                                                                class="ficon fa fa-play-circle"></i></a>
                                                    </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                <div class="content">
                                    <h2>2583</h2>
                                    <h3><a href="#">Travel Package</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-plane"></i>
                                </div>
                                <div class="content">
                                    <h2>1879</h2>
                                    <h3><a href="#">Locations Made</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="content">
                                    <h2>7215</h2>
                                    <h3><a href="#">Satisfied Client</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="content">
                                    <h2>1639</h2>
                                    <h3><a href="#">Recomended Trip</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Funfact Section End -->

    <!-- Latest Hotel Section Start -->
    <section class="latest-hotel-sec pt-85 pb-80">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Featured Collection Services</h4>
                    <h2>Our Services</h2>
                    <p>We provide complete travel solutions designed to make every journey comfortable, convenient, and
                        memorable.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="latesthotel_carousel owl-carousel owl-theme owl-navst">
                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/roesc.webp" alt="">
                                </div>
                                <div class="content">
                                    <h4>Romantic Escapes</h4>
                                    <h5>Honeymoon & Luxury Vacations</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>

                                    </ul>
                                    <p>Celebrate special moments with exclusive honeymoon and luxury vacation packages
                                        featuring premium stays, unforgettable experiences, and personalized travel
                                        services..</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                            <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/trad.webp" alt="" style="">
                                </div>
                                <div class="content">
                                    <h4>Travel Documentation</h4>
                                    <h5>Visa Assistance</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Get reliable visa assistance with end-to-end support, ensuring a smooth application
                                        process and hassle-free travel to your chosen destination..</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                        <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/cmdd.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Personalized Travel Plans</h4>
                                    <h5>Customized Holiday Packages</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>From relaxing beach vacations to exciting adventure tours, enjoy customized holiday
                                        packages crafted to suit your travel preferences and schedule..</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/domint (1).png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Fly Anywhere</h4>
                                    <h5>Domestic & International</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Explore destinations worldwide with reliable flight booking services, offering the
                                        best fares, convenient schedules, and personalized travel assistance.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/privat_320x345.webp" alt="">
                                </div>
                                <div class="content">
                                    <h4>Exclusive Air Charter</h4>
                                    <h5>Private Jets & Helicopter Services</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Enjoy personalized air travel with private jets and helicopter charters, ensuring
                                        luxury, convenience, and efficient journeys to your desired destinations.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/hotboo_320x345.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Comfortable Stays</h4>
                                    <h5>Hotel Reservations</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Book quality hotels worldwide with the best rates, convenient locations, and
                                        comfortable accommodations for a relaxing and memorable stay.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/trans_320x345.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Seamless Ground Travel</h4>
                                    <h5>Airport Transfers & Local Transportation</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Travel with ease using our airport pickup, drop-off, and local transportation
                                        services, ensuring comfort, convenience, and on-time arrivals every time.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/lea5ds_320x345.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Travel Together</h4>
                                    <h5>Family & Group Tours</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Create lasting memories with family and friends through well-planned group tours,
                                        exciting destinations, and personalized travel experiences for all ages.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/busstra_320x345.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Business Travel Solutions</h4>
                                    <h5>Corporate Travel Management</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Streamline your business travel with efficient booking, customized itineraries,
                                        cost-effective solutions, and dedicated support for corporate travelers.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/trains_320x345.jpeg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Secure Your Journey</h4>
                                    <h5>Travel Insurance</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Travel with confidence by protecting your trip against unexpected events with
                                        comprehensive travel insurance covering medical emergencies, delays, and
                                        cancellations.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/tailormade_320x345.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Personalized Travel Planning</h4>
                                    <h5>Tailor-Made Travel Experiences</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->
                                    </ul>
                                    <p>Discover journeys designed just for you with customized travel experiences,
                                        personalized itineraries, and unforgettable adventures that match your interests and
                                        budget.</p>
                                    <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                    <h3>Off <span>-30%</span></h3> -->
                                    <a class="btn-theme" href="{{ route('services') }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Hotel Section End -->

    <!-- Global Section Start -->
    <section class="global-section over-layer-white pt-80 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12">
                    <div class="global-area">
                        <div class="inner-title">
                            <h2>Making Global Travel Easy</h2>
                            <h3>Your <span>Trusted Travel Partner</span> for Every Journey</h3>
                            <div class="sec-line"></div>
                        </div>
                        <p>
                            We specialize in creating unforgettable travel experiences with personalized
                            tour packages, flight bookings, hotel reservations, and visa assistance.
                            Our dedicated team ensures every journey is comfortable, hassle-free, and
                            tailored to your preferences.
                        </p>
                        <h4>Our Travel Services Include:</h4>

                        <ul>
                            <li>Domestic and International Tour Packages</li>
                            <li>Flight, Hotel, and Transportation Bookings</li>
                            <li>Visa Assistance and Travel Insurance</li>
                            <li>24/7 Customer Support Throughout Your Journey</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-10" style="margin-top:20px;">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps?q=Coimbatore&output=embed" width="100%"
                            height="400" style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p class="map-content">
                        Need help planning your next trip?
                        <span class="color-light">Call:</span>
                        <span>+91-9916170891</span>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- Global Section End -->

    <!-- Gallery Section Start -->
    <section class="gallery-section pt-85 pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="section-title">
                    <h4>Travel Gallery</h4>
                    <h2>Explore <span>Our</span> Travel Moments</h2>
                    <p>Discover unforgettable journeys, stunning destinations, and memorable moments. Every photo reflects
                        our passion for creating exceptional travel experiences for our valued clients.</p>
                </div>
            </div>
            <div class="row gallery-items">
                <div class="col-sm-4 col-grid">
                    <div class="gallery-item">
                        <div class="thumb">
                            <img src="{{asset('website')}}/images/gallery/1.jpg" alt="image">
                            <div class="overlay">
                                <div class="inner">
                                    <a href="{{asset('website')}}/images/gallery/1.jpg" class="icon lightbox-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <h4>Beautiful Nature</h4>
                                    <p>Tour, Travel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-grid col-center">
                    <div class="gallery-item">
                        <div class="thumb">
                            <img src="{{asset('website')}}/images/gallery/2.jpg" alt="image">
                            <div class="overlay">
                                <div class="inner">
                                    <a href="{{asset('website')}}/images/gallery/2.jpg" class="icon lightbox-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <h4>Beautiful Nature</h4>
                                    <p>Tour, Travel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-grid">
                    <div class="gallery-item">
                        <div class="thumb">
                            <img src="{{asset('website')}}/images/gallery/3.jpg" alt="image">
                            <div class="overlay">
                                <div class="inner">
                                    <a href="{{asset('website')}}/images/gallery/3.jpg" class="icon lightbox-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <h4>Beautiful Nature</h4>
                                    <p>Tour, Travel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-grid">
                    <div class="gallery-item">
                        <div class="thumb">
                            <img src="{{asset('website')}}/images/gallery/4.jpg" alt="image">
                            <div class="overlay">
                                <div class="inner">
                                    <a href="{{asset('website')}}/images/gallery/4.jpg" class="icon lightbox-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <h4>Beautiful Nature</h4>
                                    <p>Tour, Travel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-grid col-center">
                    <div class="gallery-item">
                        <div class="thumb">
                            <img src="{{asset('website')}}/images/gallery/5.jpg" alt="image">
                            <div class="overlay">
                                <div class="inner">
                                    <a href="{{asset('website')}}/images/gallery/5.jpg" class="icon lightbox-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <h4>Beautiful Nature</h4>
                                    <p>Tour, Travel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-grid">
                    <div class="gallery-item">
                        <div class="thumb">
                            <img src="{{asset('website')}}/images/gallery/6.jpg" alt="image">
                            <div class="overlay">
                                <div class="inner">
                                    <a href="{{asset('website')}}/images/gallery/6.jpg" class="icon lightbox-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <h4>Beautiful Nature</h4>
                                    <p>Tour, Travel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Testimonials Section Start -->
    {{-- <section class="testimonials-section pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial-video mt-0">
                        <h5>Latest Hotel Reviews</h5>
                        <div class="sec-line mb-20"></div>
                        <h3><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you need to
                            be on sure there isn’t anything embarras repeat predefined chunks as.</h3>
                        <a class="btn-theme popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"><i
                                class="fa fa-play-circle"></i> Play Video</a>
                        <div class="review-ratings">
                            <a class="ratings-star" href="#">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                                <i class="fa fa-star-o"></i>
                            </a>
                            <a class="ratings-count" href="#">(3 Ratings)</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="inner-title mt-25">
                        <h2>Our Client's Say</h2>
                        <div class="sec-line mb-40"></div>
                    </div>
                    <div class="testimonials-post testimonials_slide owl-carousel owl-theme owl-navst st-three">
                        <div class="testimonials-item">
                            <div class="thumb">
                                <img src="{{asset('website')}}/images/testimonials/1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5>Horem Due <small>- Traveler ut illum</small></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                </ul>
                                <p><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you
                                    need to be sure there isn’t anything embarrassing hidden in the middle often repeat
                                    predefined chunks as necessary, making this the first true generator on the Internet.
                                </p>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="thumb">
                                <img src="{{asset('website')}}/images/testimonials/1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5>Horem Due <small>- Traveler ut illum</small></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                </ul>
                                <p><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you
                                    need to be sure there isn’t anything embarrassing hidden in the middle often repeat
                                    predefined chunks as necessary, making this the first true generator on the Internet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Testimonials Section End -->

    <!-- App Section Start -->
    <section class="app-section over-layer-white pt-80 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="inner-title title-center">
                        <h2>Now We Are Globaly Everywhere</h2>
                        <h3>Connecting <span>You to Destinations</span>, Around the World </h3>
                        <div class="sec-line line-center"></div>
                    </div>
                    <p>At AK Explore and Experience LLP, we proudly serve travelers across the globe with reliable,
                        personalized, and hassle-free travel solutions. Whether you're planning a business trip, a family
                        vacation, a honeymoon, or an international adventure, our expert team ensures every journey is
                        seamless from start to finish.</p>
                    <!-- 
                        <a class="btn-theme" href="#">Download App</a>
                        <a class="btn-theme btn-two" href="#">Subscribe Now</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- App Section End -->

    <!-- Blog Section Start -->
    {{-- <section class="blog-section bg-f8 pt-85 pb-55">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Our latest blog</h4>
                    <h2>Touran <span>Latest</span> Blog</h2>
                    <p>Consectetur adipisicing elit. Excepturi nemo tenetur veniam repellat earum inventore modi omnis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('website')}}/images/blog/1.jpg">
                            <div class="content">
                                <h3>Summer Vacation Travel On gratest global mounten</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('website')}}/images/blog/2.jpg">
                            <div class="content">
                                <h3>Winter Vacation Travel On beautiful tour package</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('website')}}/images/blog/3.jpg">
                            <div class="content">
                                <h3>Summer Vacation Travel On gratest global Tower</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Blog Section End -->

    <!-- Contact Section Start -->
    {{-- <section class="contact-section pt-90 pb-90">
        <div class="container">
            <div class="row contact-bg">
                <div class="col-md-12 col-lg-4 p-0">
                    <div class="contact-text">
                        <h2>We are <span>Booking</span></h2>
                        <h4>Get in Touch</h4>
                        <div class="sec-line mb-20"></div>
                        <p>Consectetur adipisicing elit. Temporibus error quod necessitatibus</p>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="flaticon-pin-1"></i>
                            </div>
                            <h6>Street melbourne, Australia</h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="flaticon-flash"></i>
                            </div>
                            <h6>+880 195085 363</h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="pe-7s-map"></i>
                            </div>
                            <h6>info@bdCoderonline.com</h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="pe-7s-server"></i>
                            </div>
                            <h6><a href="#">http:/bdCoderonline.com</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 style-2">

                    <form class="booking-form" method="post" action="#">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                <a class="nav-item nav-link active" id="nav-hotelbk-tab" data-bs-toggle="tab"
                                    href="#nav-hotelbk" role="tab" aria-controls="nav-hotelbk"
                                    aria-selected="true">Hotels</a>
                                <a class="nav-item nav-link" id="nav-packagesbk-tab" data-bs-toggle="tab"
                                    href="#nav-packagesbk" role="tab" aria-controls="nav-packagesbk"
                                    aria-selected="false">Packages</a>
                                <a class="nav-item nav-link" id="nav-placesbk-tab" data-bs-toggle="tab" href="#nav-placesbk"
                                    role="tab" aria-controls="nav-placesbk" aria-selected="false">Places</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent1">
                            <!-- item start -->
                            <div class="tab-pane fade show active" id="nav-hotelbk" role="tabpanel"
                                aria-labelledby="nav-hotelbk-tab">
                                <div class="row form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="hotelname" class="form-control"
                                            placeholder="Input Hotel name here" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="hbcity">
                                            <option value="choose-city">Choose City</option>
                                            <option value="melbourne-australia">Melbourne, Australia</option>
                                            <option value="chennai-india">Chennai, India</option>
                                            <option value="london-uk">London, UK</option>
                                            <option value="delhi-india">Delhi, India</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="hbcat">
                                            <option value="choose-category">Choose Category</option>
                                            <option value="business">Business</option>
                                            <option value="family">Family</option>
                                            <option value="romance">Romance</option>
                                            <option value="batchelor">Batchelor</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hbminprice">
                                            <option value="choose-category">Min Price</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hbmaxprice">
                                            <option value="choose-category">Max Price</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hboffer">
                                            <option value="choose-category">Choose Offer</option>
                                            <option value="5%">5%</option>
                                            <option value="10%">10%</option>
                                            <option value="20%">20%</option>
                                            <option value="25%">25%</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="contact-textarea text-center">
                                            <button class="btn btn-theme" type="submit" value="Submit Form">Find
                                                Hotel</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12 info-text">
                                        <p>we have listed <span>2435</span> hotels all over the world</p>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <!-- item start -->
                            <div class="tab-pane fade" id="nav-packagesbk" role="tabpanel"
                                aria-labelledby="nav-packagesbk-tab">
                                <div class="row form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="package_name" class="form-control"
                                            placeholder="Input Package name here" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="hbcity">
                                            <option value="choose-city">Choose City</option>
                                            <option value="melbourne-australia">Melbourne, Australia</option>
                                            <option value="chennai-india">Chennai, India</option>
                                            <option value="london-uk">London, UK</option>
                                            <option value="delhi-india">Delhi, India</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="hbcat">
                                            <option value="choose-category">Choose Category</option>
                                            <option value="holidays">Holidays</option>
                                            <option value="vacation">Vacation</option>
                                            <option value="summer">Summer</option>
                                            <option value="winter">Winter</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hbminprice">
                                            <option value="choose-category">Min Price</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hbmaxprice">
                                            <option value="choose-category">Max Price</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hboffer">
                                            <option value="choose-category">Choose Offer</option>
                                            <option value="5%">5%</option>
                                            <option value="10%">10%</option>
                                            <option value="20%">20%</option>
                                            <option value="25%">25%</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="contact-textarea text-center">
                                            <button class="btn btn-theme" type="submit" value="Submit Form">Find
                                                Package</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12 info-text">
                                        <p>we have listed <span>3435</span> Packages all over the world</p>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <!-- item start -->
                            <div class="tab-pane fade" id="nav-placesbk" role="tabpanel" aria-labelledby="nav-placesbk-tab">
                                <div class="row form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="place_name" class="form-control"
                                            placeholder="Input Place name here" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="hbcity">
                                            <option value="choose-city">Choose City</option>
                                            <option value="melbourne-australia">Melbourne, Australia</option>
                                            <option value="chennai-india">Chennai, India</option>
                                            <option value="london-uk">London, UK</option>
                                            <option value="delhi-india">Delhi, India</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="hbcat">
                                            <option value="choose-category">Choose Category</option>
                                            <option value="adventure">Adventure</option>
                                            <option value="rainy-season">Rainy Season</option>
                                            <option value="ice-tripe">Ice Tripe</option>
                                            <option value="asia">Asia</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hbminprice">
                                            <option value="choose-category">Min Price</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hbmaxprice">
                                            <option value="choose-category">Max Price</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="hboffer">
                                            <option value="choose-category">Choose Offer</option>
                                            <option value="5%">5%</option>
                                            <option value="10%">10%</option>
                                            <option value="20%">20%</option>
                                            <option value="25%">25%</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="contact-textarea text-center">
                                            <button class="btn btn-theme" type="submit" value="Submit Form">Find
                                                Place</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12 info-text">
                                        <p>we have listed <span>8435</span> Places all over the world</p>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- Contact Section End -->

    <!-- Client Section Start -->
    <!-- <section class="client-section bg-f8 pb-70 pt-70">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div id="client_carousel" class="owl-carousel">
                                                                                                        <div class="item">
                                                                                                            <div class="client-img-item">
                                                                                                                <img src="{{asset('website')}}/images/partner/1.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="item">
                                                                                                            <div class="client-img-item">
                                                                                                                <img src="{{asset('website')}}/images/partner/2.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="item">
                                                                                                            <div class="client-img-item">
                                                                                                                <img src="{{asset('website')}}/images/partner/3.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="item">
                                                                                                            <div class="client-img-item">
                                                                                                                <img src="{{asset('website')}}/images/partner/4.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="item">
                                                                                                            <div class="client-img-item">
                                                                                                                <img src="{{asset('website')}}/images/partner/5.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="item">
                                                                                                            <div class="client-img-item">
                                                                                                                <img src="{{asset('website')}}/images/partner/6.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="item">
                                                                                                            <div class="client-img-item">
                                                                                                                <img src="{{asset('website')}}/images/partner/2.png" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section> -->
    <!-- Client Section End -->
@endsection