@extends('layouts.website')
@section('content')
    <!-- Inner Section Start -->
    <section class="inner-area parallax-bg" data-background="{{asset('website')}}/images/bg/px-1.jpg" data-type="parallax"
        data-speed="3">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12">
                        <h4>Holiday</h4>
                        <p><a href="{{ route('home') }}">Home</a> / Services </p>
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
                            <!-- <img src="{{asset('website')}}/images/serviceimg.png" alt=""> -->
                            <!-- <div class="offer-price"> Off 40%</div>
                                                                    <div class="post-title-box">
                                                                        <div class="price-box">
                                                                            <h5><span>₹</span>400</h5>
                                                                            <h6>Starts From</h6>
                                                                        </div>
                                                                        <div class="title-box">
                                                                            <h4>Redilova Tour Place</h4>
                                                                            <h3>peelamedu, cbe, india</h3>
                                                                        </div>
                                                                    </div> -->
                        </div>
                        {{-- services --}}
                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                                                </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Fly Anywhere</h6>
                                    <h5>Domestic & International Flight Bookings</h5>
                                    <p>Explore destinations worldwide with reliable flight booking services, offering the
                                        best fares, convenient schedules, and personalized travel assistance.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->


                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Domestic & International Flight Bookings')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/dom1 (2).png" alt="">
                                    <img src="{{asset('website')}}/images/dom2.webp" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->
                        </div>

                        {{-- services2 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                                            </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Exclusive Air Charter</h6>
                                    <h5>Private Jets & Helicopter Services</h5>
                                    <p>Enjoy personalized air travel with private jets and helicopter charters, ensuring
                                        luxury, convenience, and efficient journeys to your desired destinations.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->



                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Private Jets & Helicopter Services')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/hel.png" alt="">
                                    <img src="{{asset('website')}}/images/jet.webp" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->
                        </div>

                        {{-- services3 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                                            <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                                            <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                                            <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                                        </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Personalized Travel Plans</h6>
                                    <h5>Customized Holiday Packages</h5>
                                    <p>From relaxing beach vacations to exciting adventure tours, enjoy customized holiday
                                        packages crafted to suit your travel preferences and schedule.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->


                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Customized Holiday Packages')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/hol1.jpg" alt="">
                                    <img src="{{asset('website')}}/images/hol2.jpg" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>


                        {{-- services4 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                                        <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                                        <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                                        <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                                    </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Comfortable Stays</h6>
                                    <h5>Hotel Reservations</h5>
                                    <p>Book quality hotels worldwide with the best rates, convenient locations, and
                                        comfortable accommodations for a relaxing and memorable stay.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->


                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Hotel Reservations')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/hot2.png" alt="">
                                    <img src="{{asset('website')}}/images/hot3.webp" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>



                        {{-- services5 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                                </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Travel Documentation</h6>
                                    <h5>Visa Assistance</h5>
                                    <p>Get reliable visa assistance with end-to-end support, ensuring a smooth application
                                        process and hassle-free travel to your chosen destination.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->

                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Visa Assistance')">Enquiry
                                            Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/B2B.png" alt="">
                                    <img src="{{asset('website')}}/images/visa2.png" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>




                        {{-- services6 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                            </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Seamless Ground Travel</h6>
                                    <h5>Airport Transfers & Local Transportation</h5>
                                    <p>Travel with ease using our airport pickup, drop-off, and local transportation
                                        services, ensuring comfort, convenience, and on-time arrivals every time.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->

                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Airport Transfers & Local Transportation')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/air.png" alt="">
                                    <img src="{{asset('website')}}/images/air1.png" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>



                        {{-- services7 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                            <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                            <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                            <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                        </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Romantic Escapes</h6>
                                    <h5>Honeymoon & Luxury Vacations</h5>
                                    <p>Celebrate special moments with exclusive honeymoon and luxury vacation packages
                                        featuring premium stays, unforgettable experiences, and personalized travel
                                        services.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->


                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Honeymoon & Luxury Vacations')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/rom1_with_bgc.png" alt="">
                                    <img src="{{asset('website')}}/images/rom_with_bgc.png" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>



                        {{-- services8 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                        <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                        <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                        <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                    </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Travel Together</h6>
                                    <h5>Family & Group Tours</h5>
                                    <p>Create lasting memories with family and friends through well-planned group tours,
                                        exciting destinations, and personalized travel experiences for all ages.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->

                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Family & Group Tours')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/fam1_with_bgc.png" alt="">
                                    <img src="{{asset('website')}}/images/fam_312x205.jpeg" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>



                        {{-- services9 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                    <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                    <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                    <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                                </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Business Travel Solutions</h6>
                                    <h5>Corporate Travel Management</h5>
                                    <p>Streamline your business travel with efficient booking, customized itineraries,
                                        cost-effective solutions, and dedicated support for corporate travelers.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->


                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Corporate Travel Management')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/cor1_with_bgc.png" alt="">
                                    <img src="{{asset('website')}}/images/cor_with_bgc.png" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>



                        {{-- services10 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                            </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Secure Your Journey</h6>
                                    <h5>Travel Insurance</h5>
                                    <p>Travel with confidence by protecting your trip against unexpected events with
                                        comprehensive travel insurance covering medical emergencies, delays, and
                                        cancellations.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->

                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Travel Insurance')">Enquiry
                                            Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/ins_with_bgc.png" alt="">
                                    <img src="{{asset('website')}}/images/ins1_with_bgc.png" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

                        </div>




                        {{-- services11 --}}

                        <div class="content">
                            <!-- <ul class="info">
                                                                                                                                                                            <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                                                                                                                                            <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                                                                                                                                            <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                                                                                                                                                        </ul> -->

                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Personalized Travel Planning</h6>
                                    <h5>Tailor-Made Travel Experiences</h5>
                                    <p>Discover journeys designed just for you with customized travel experiences,
                                        personalized itineraries, and unforgettable adventures that match your interests and
                                        budget.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <!-- <li><a href="#">(3 Ratings)</a></li> -->


                                        <a class="btn-theme" href="javascript:void(0);"
                                            onclick="openModal('Tailor-Made Travel Experiences')">Enquiry Now</a>
                                        <!-- <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a> -->
                                    </ul>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('website')}}/images/tia_with_bgc.png" alt="">
                                    <img src="{{asset('website')}}/images/tia1_with_bgc.png" alt="">
                                </div>
                            </div>
                            <!-- <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5> -->

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

                        <ul class="ps-3">
                            <li class="mb-2">Domestic and International Tour Packages</li>
                            <li class="mb-2">Flight, Hotel, and Transportation Bookings</li>
                            <li class="mb-2">Visa Assistance and Travel Insurance</li>
                            <li class="mb-2">24/7 Customer Support Throughout Your Journey</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-10" style="margin-top:20px;">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps?q=Coimbatore&output=embed" width="100%" height="400"
                            style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy"
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

    <!-- Testimonials Section Start -->
    <!-- <section class="testimonials-section pt-80 pb-80">
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
                                                                                                                                                                                                                                                                                    </section> -->
    <!-- Testimonials Section End -->

    <!-- Client Section Start -->
    <!-- <section class="client-section bg-f8 style-2 pb-70">
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



    <script>
        function openModal(service) {

            document.getElementById("bookingModal").style.display = "block";
            document.getElementById("serviceName").innerText = service;
            document.getElementById("serviceInput").value = service;

        }

        function closeModal() {

            document.getElementById("bookingModal").style.display = "none";

        }

        window.onclick = function (event) {

            let modal = document.getElementById("bookingModal");

            if (event.target == modal) {
                modal.style.display = "none";
            }

        }
    </script>

    <script>
        document.getElementById('travel_date').min = new Date().toISOString().split("T")[0];
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.getElementById("dob").addEventListener("change", function () {

                const dob = new Date(this.value);
                const today = new Date();

                let age = today.getFullYear() - dob.getFullYear();

                const month = today.getMonth() - dob.getMonth();

                if (month < 0 || (month === 0 && today.getDate() < dob.getDate())) {
                    age--;
                }

                document.getElementById("age").value = age;
            });

        });
    </script>


    <div id="bookingModal" class="modal">
        <div class="modal-content">

            <span class="close" onclick="closeModal()">&times;</span>

            <h2>Travel Booking</h2>
            <h2 id="serviceName"
                style="
                                                                                                                                                                                                                                                                    display:inline-block;

                                                                                                                                                                                                                                                                    color:#000;
                                                                                                                                                                                                                                                                    padding:8px;
                                                                                                                                                                                                                                                                    border-radius:6px;
                                                                                                                                                                                                                                                                    font-size:18px;
                                                                                                                                                                                                                                                                    font-weight:600;
                                                                                                                                                                                                                                                                    margin: 0 15px;
                                                                                                                                                                                                                                                                ">
                Selected Service
            </h2>


            <input type="hidden" name="service" id="serviceInput">

            <form action="{{ route('services.store') }}" method="POST">
                @csrf

                <label>Name</label>
                <input type="text" name="full_name" placeholder="Traveler's Full Name " required>

                <label>Date of Birth</label>
                <input type="date" name="dob" id="dob" required>

                <label>Age</label>
                <input type="number" name="age" id="age" required>

                <label>Gender</label>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>

                <label>Phone Number <span style="color:red">*</span></label>
                <input type="tel" name="contact" placeholder="Enter your contact number" pattern="[6-9][0-9]{9}"
                    maxlength="10" required oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10);">

                <label>Email <span style="color:red">*</span></label>
                <input type="email" name="email" placeholder="Enter your email" maxlength="100" required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">


                <label>Travel Date <span style="color:red">*</span></label>
                <input type="date" name="travel_date" id="travel_date" min="{{ date('Y-m-d') }}" required>

                <label>Additional Note</label>
                <textarea name="message" rows="4" placeholder="Enter your travel requirements"></textarea>

                <button type="submit">Submit Booking</button>

            </form>

        </div>
    </div>


    <style>
        /* Modal Background */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            inset: 0;
            background: rgba(0, 0, 0, 0.65);
            overflow-y: auto;
            padding: 30px 15px;
        }

        /* Modal Box */
        .modal-content {
            position: relative;
            background: #fff;
            width: 100%;
            max-width: 700px;
            margin: auto;
            border-radius: 15px;
            padding: 35px;
            animation: popup .35s ease;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .25);
        }

        /* Animation */
        @keyframes popup {
            from {
                transform: translateY(-40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 32px;
            color: #666;
            cursor: pointer;
            transition: .3s;
        }

        .close:hover {
            color: #d9232d;
            transform: rotate(90deg);
        }

        /* Heading */
        .modal-content h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #163269;
            font-size: 32px;
            font-weight: 700;
        }

        /* Labels */
        .modal-content label {
            display: block;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 600;
            color: #333;
        }

        /* Inputs */
        .modal-content input,
        .modal-content select,
        .modal-content textarea {
            width: 100%;
            height: 52px;
            border: 1px solid #dcdcdc;
            border-radius: 8px;
            padding: 0 15px;
            font-size: 15px;
            margin-bottom: 18px;
            transition: .3s;
            outline: none;
            background: #fafafa;
        }

        .modal-content textarea {
            height: 120px;
            resize: none;
            padding: 15px;
        }

        /* Focus */
        .modal-content input:focus,
        .modal-content select:focus,
        .modal-content textarea:focus {
            border-color: #0d6efd;
            background: #fff;
            box-shadow: 0 0 10px rgba(13, 110, 253, .15);
        }

        /* Readonly Service Field */
        #serviceName {
            background: #eef6ff;
            color: #0d6efd;
            font-weight: 600;
        }

        /* Submit Button */
        .modal-content button {
            width: 100%;
            height: 55px;
            border: none;
            border-radius: 8px;
            background: #ff6b00;
            color: #fff;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .modal-content button:hover {
            background: #163269;
        }

        /* Two Column Layout */
        .booking-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* Responsive */
        @media(max-width:768px) {

            .modal-content {
                padding: 25px;
            }

            .booking-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .modal-content h2 {
                font-size: 26px;
            }
        }


        @media only screen and (max-width:767px) {
            .special-packages .content .small-hotel .thumb {

                img {
                    padding-bottom: 10px;

                }

            }
        }

        @media only screen and (max-width: 991px) {
            .special-packages.dtl-st .content .small-hotel .thumb img {

                width: auto;
            }
        }
    </style>
@endsection