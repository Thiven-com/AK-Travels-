@extends('layouts.website')
@section('content')

    <!-- Inner Banner -->
    <section class="inner-area parallax-bg" data-background="{{ asset('website') }}/images/slider/3.jpg"
        data-type="parallax" data-speed="3">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 style="color: #fff;">About Us</h2>
                        <p>About <a href="{{ route('home') }}">Home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="global-section pt-90 pb-80">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('website') }}/images/slider/1.jpg" class="img-fluid rounded shadow"
                        alt="About AK Explore">
                </div>

                <div class="col-lg-6">
                    <div class="inner-title mb-4">
                        <h4>About AK Explore & Experience LLP</h4>
                        <h2>Don't Just Travel. <span>Experience.</span></h2>
                        <div class="sec-line"></div>
                    </div>

                    <p>
                        <strong>AK Explore and Experience LLP</strong> is a premium travel company committed to
                        creating exceptional travel experiences through personalized service, meticulous planning,
                        and trusted travel solutions.
                    </p>

                    <p>
                        With extensive expertise in the travel and aviation industry, we specialize in designing
                        seamless journeys for individuals, families, groups, and corporate clients.
                    </p>

                    <p>
                        We believe travel is more than reaching a destination—it's about creating unforgettable
                        memories, discovering new cultures, and experiencing the world with confidence.
                    </p>

                    <blockquote class="mt-4 p-3 bg-light border-left">
                        <h5><strong>Our Motto</strong></h5>
                        <h4 class="text-primary">"Don't Just Travel. Experience."</h4>
                    </blockquote>

                </div>

            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="feature-section over-layer-black pt-90 pb-80">
        <div class="container">

            <div class="row">
                <div class="section-title">
                    <h4>Our Foundation</h4>
                    <h2>Vision & <span>Mission</span></h2>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="content">
                            <h3>Our Vision</h3>
                            <ul class="mt-3">
                                <li>Provide customized interior solutions for homes, offices, and commercial spaces.</li>
                                <li>Deliver high-quality workmanship with premium materials and finishes.</li>
                                <li>Complete every project on time with transparent communication.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="content">
                            <h3>Our Mission</h3>

                            <ul class="mt-3">
                                <li>Deliver personalized travel solutions tailored to every client.</li>
                                <li>Build lasting relationships through trust and transparency.</li>
                                <li>Ensure hassle-free travel with end-to-end assistance.</li>
                                <li>Create memorable journeys that exceed customer expectations.</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Services -->
    <section class="pt-90 pb-80 bg-light">
        <div class="container">

            <div class="row">
                <div class="section-title">
                    <h4>What We Offer</h4>
                    <h2>Our <span>Services</span></h2>
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-md-6">
                    <ul class="list-unstyled service-list">
                        <li>✈️ Domestic & International Flight Bookings</li>
                        <li>🚁 Private Jets & Helicopter Services</li>
                        <li>🌍 Customized Holiday Packages</li>
                        <li>🏨 Hotel Reservations</li>
                        <li>🛂 Visa Assistance</li>
                        <li>🚗 Airport Transfers & Local Transportation</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul class="list-unstyled service-list">
                        <li>🏝️ Honeymoon & Luxury Vacations</li>
                        <li>👨‍👩‍👧‍👦 Family & Group Tours</li>
                        <li>💼 Corporate Travel Management</li>
                        <li>🛡️ Travel Insurance</li>
                        <li>🎯 Tailor-Made Travel Experiences</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="pt-90 pb-80">
        <div class="container">

            <div class="row">
                <div class="section-title">
                    <h4>Why Choose Us</h4>
                    <h2>Why <span>AK Explore</span></h2>
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-md-6">
                    <ul>
                        <li>✔ Personalized travel planning</li>
                        <li>✔ Transparent pricing with no hidden costs</li>
                        <li>✔ Dedicated customer support</li>
                        <li>✔ Carefully curated travel experiences</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul>
                        <li>✔ Reliable travel partners</li>
                        <li>✔ End-to-end travel assistance</li>
                        <li>✔ Commitment to customer satisfaction</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- Our Values -->
    <section class="feature-section over-layer-black pt-90 pb-80">
        <div class="container">

            <div class="row">
                <div class="section-title">
                    <h4>Our Core Values</h4>
                    <h2>Our <span>Values</span></h2>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-md-3">
                    <div class="feature-item text-center">
                        <h3>Trust</h3>
                        <p>Building long-term relationships through honesty and reliability.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-item text-center">
                        <h3>Excellence</h3>
                        <p>Delivering exceptional quality in every journey.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-item text-center">
                        <h3>Integrity</h3>
                        <p>Maintaining transparency and professionalism at every step.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-item text-center">
                        <h3>Customer First</h3>
                        <p>Every itinerary is designed around our clients' needs and expectations.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Our Promise -->
    <section class="pt-90 pb-90">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">

                    <div class="inner-title">
                        <h4>Our Promise</h4>
                        <h2>Travel With <span>Confidence</span></h2>
                        <div class="sec-line"></div>
                    </div>

                    <p class="mt-4">
                        At <strong>AK Explore and Experience LLP</strong>, every journey is planned with passion,
                        precision, and care. Whether you're traveling for business, leisure, a honeymoon,
                        a family holiday, or a special celebration, we are committed to making every trip
                        smooth, memorable, and truly extraordinary.
                    </p>

                    <h3 class="mt-5">
                        AK Explore and Experience LLP
                    </h3>

                    <h4 class="text-primary">
                        Don't Just Travel. Experience.
                    </h4>

                </div>
            </div>

        </div>
    </section>

@endsection