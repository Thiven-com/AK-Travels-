@extends('layouts.website')
@section('content')
    <!-- Inner Section Start -->
    <section class="inner-area parallax-bg" data-background="{{asset('website')}}/images/bg/px-1.jpg" data-type="parallax" data-speed="3">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12">
                        <h4>Holiday</h4>
                        <p>Home <a href="#">Packages Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Section End -->

    <!-- Special Packages Section Start -->
    <section class="special-packages-sec pt-85 pb-60">
        <div class="container">
            <div class="row grid-mb">
                <div class="col-md-12">
                    <div class="special-packages dtl-st">
                        <div class="thumb">
                            <img src="{{asset('website')}}/images/features/dtl-1.jpg" alt="">
                            <div class="offer-price"> Off 40%</div>
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5><span>$</span>400</h5>
                                    <h6>Starts From</h6>
                                </div>
                                <div class="title-box">
                                    <h4>Redilova Tour Place</h4>
                                    <h3>peelamedu, cbe, india</h3>
                                </div>
                            </div>
                        </div>
                        {{-- services --}}
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan Return Hotel</h5>
                                    <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ptate reiciendis
                                        eligendi cupiditate optimal.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/features/sm-d1.jpg" alt="">
                                    <img src="{{asset('website')}}/images/features/sm-d2.jpg" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">Booking Now</a>
                        </div>

                        {{-- services2 --}}

                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan Return Hotel</h5>
                                    <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ptate reiciendis
                                        eligendi cupiditate optimal.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/features/sm-d1.jpg" alt="">
                                    <img src="{{asset('website')}}/images/features/sm-d2.jpg" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">Booking Now</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Special Packages Section End -->

    <!-- Global Section Start -->
    <section class="global-section over-layer-white pt-80 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12">
                    <div class="global-area">
                        <div class="inner-title">
                            <h2>Now We Are Globaly Everywhare</h2>
                            <h3>Discover vestibulum <span>pharetra orci turpis</span>, ut interdum </h3>
                            <div class="sec-line"></div>
                        </div>
                        <p>Pellentesque consectetur condimentum libero, interdum aliquet enim sollic tudin ut. Donec dapibus
                            tempor odio eu aliquet. Vivamus ultricies augue ut.</p>
                        <h4>Condimentum at sed sapien:</h4>
                        <ul>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-10">
                    <div class="map-area">
                        <img src="{{asset('website')}}/images/photos/map01.png" alt="image">
                    </div>
                    <p class="map-content">Discover vestibulum <span class="color-light">Call:</span>
                        <span>+88095085363</span>, ut interdum </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Global Section End -->

    <!-- Testimonials Section Start -->
    <section class="testimonials-section pt-80 pb-80">
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
    </section>
    <!-- Testimonials Section End -->

    <!-- Client Section Start -->
    <section class="client-section bg-f8 style-2 pb-70">
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
    </section>
    <!-- Client Section End -->
@endsection