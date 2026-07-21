@extends('layouts.website')
@section('content')

    <!-- Inner Section Start -->
    <section class="inner-area parallax-bg" data-background="{{ asset('website') }}/images/bg/px-1.jpg" data-type="parallax"
        data-speed="3">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12">
                        <h4>contact</h4>
                        <p>Contact <a href="{{ route('home') }}">Home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Section End -->

    <section class="contact-details pb-70">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <h3 class="title">Contact <span>us</span></h3>
                        @if(session('success'))
                            <div class="success-alert" style="background:#d4edda;
                                                            color:#155724;
                                                            border:1px solid #c3e6cb;
                                                            padding:15px 20px;
                                                            border-radius:8px;
                                                            margin-bottom:20px;
                                                            display:flex;
                                                            justify-content:space-between;
                                                            align-items:center;
                                                            font-weight:600;">

                                <span>✅ {{ session('success') }}</span>

                                <button type="button" onclick="this.parentElement.remove();" style="background:none;
                                                                   border:none;
                                                                   font-size:22px;
                                                                   color:#155724;
                                                                   cursor:pointer;">
                                    &times;
                                </button>
                            </div>
                        @endif
                        <form id="" method="post" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="f_name" id="f_name" class="form-control"
                                        placeholder="First Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="l_name" id="l_name" class="form-control"
                                        placeholder="Last Name" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"
                                        id="subject" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="contact-textarea">
                                        <textarea class="form-control" rows="6" placeholder="Write Message" id="message"
                                            name="message" required></textarea>
                                        <button class="btn btn-theme mt-4" type="submit" value="Submit Form">Send
                                            Message</button>
                                    </div>
                                </div>
                                <!-- <div id="form-messages"></div> -->
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <h3 class="title">Get in <span>Touch</span></h3>
                        <div class="service-item style-1 border-1px">
                            <div class="service-icon">
                                <i class="pe-7s-map"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Contact Info</a></h5>
                                <p> +91-9916170891</p>
                            </div>
                        </div>

                        <div class="service-item style-1 border-1px">
                            <div class="service-icon">
                                <i class="pe-7s-mail-open"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Email</a></h5>
                                <p><a href="mailto:info.aktravelsolutions.in">info.aktravelsolutions.in</a></p>
                            </div>
                        </div>
                        <div class="service-item style-1 border-1px">
                            <div class="service-icon">
                                <i class="pe-7s-map-marker"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Our Address</a></h5>
                                <p>
                                    AK Explore and Experience LLP<br>
                                    Coimbatore, India
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="map">
            <iframe
                src="https://www.google.com/maps?q=Coimbatore&output=embed"
                height="450" allowfullscreen=""></iframe>
        </div>
    </section>

    <!-- Client Section Start -->
    <!-- <section class="client-section bg-f8 style-2 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="client_carousel" class="owl-carousel">
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('website') }}/images/partner/1.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('website') }}/images/partner/2.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('website') }}/images/partner/3.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('website') }}/images/partner/4.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('website') }}/images/partner/5.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('website') }}/images/partner/6.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('website') }}/images/partner/2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Client Section End -->
    <script>
        setTimeout(function () {
            let alert = document.querySelector('.success-alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s";
                alert.style.opacity = "0";

                setTimeout(function () {
                    alert.remove();
                }, 500);
            }
        }, 5000);
    </script>
@endsection