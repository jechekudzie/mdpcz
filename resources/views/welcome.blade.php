@extends('website.partials.layout')

@section('template_title')
    Home
@endsection


@section('site_content')
    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area section">
        <!-- Hero Slider -->
        <div id="hero-slider" class="nivoSlider">
            <img src="{{asset('img/hero/1.jpg')}}" alt="" title="#herocaption-1"/>
            <img src="{{asset('img/hero/2.jpg')}}" alt="" title="#herocaption-2"/>
        </div>
        <!-- Hero Slider Caption -->
        <div id="herocaption-1" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <!-- Hero Content -->
                    <div class="hero-content col-xs-12">
                        <h1 style="color: white;" class="wow cusFadeInRight" data-wow-duration=".5s"
                            data-wow-delay="0.5s">Medical & <br>
                            Dental Practitioners Council </h1>
                        <p class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1s"></p>
                        <a href="{{url('/what-we-do')}}" class="learn-more wow cusFadeInRight" data-wow-duration=".5s"
                           data-wow-delay="1.5s">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Slider Caption -->
        <div id="herocaption-2" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <!-- Hero Content -->
                    <div class="hero-content col-xs-12">
                        <h1 style="color: blue;" class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="0.5s">For
                            Professions</h1>
                        <p style="color: red;font-weight: bold" class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1s">Regulate, control and
                            supervise all matters affecting the training of Medical and Dental Professions.</p>
                        <a href="#" class="learn-more wow cusFadeInRight" data-wow-duration=".5s"
                           data-wow-delay="1.5s"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

    <div class="call-out2">
        <div class="container">
            <div class="clearfix">
                <div class="float_left">
                    <h4>Looking for registered doctors ?</h4>
                    <br>
                    <div class="text-center center">
                        <a href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php" target="_blank"
                           class="btn btn-sm btn-primary text-center">
                            Find
                        </a>
                    </div>
                </div>

                <div class="float_right">
                    <h4>Check Student Results Online</h4>
                    <br>
                    <div class="text-center center">
                        <a href="http://www.mdpcz.co.zw/mdpcz_results/" target="_blank"
                           class="btn btn-sm btn-primary text-center">
                            Check
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="why-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="about-text">
                        <div class="section-title">
                            <h2> What We Do</h2>
                            <div class="text">
                            </div>
                        </div>

                        <div class="text-icon-grid">
                            <div class="text-icon-squared animation animated fadeInUp">
                                <div class="hover"></div>
                                <div class="caption">
                                    <div class="icon-big"><span class="icon icon-people"></span></div>
                                    <h5 class="title" style="height: 28px;">Acts</h5>
                                    <div class="text" style="height: 48px;">Regulating all Acts related to the Medical
                                        field to assure best practice.
                                    </div>
                                    <br>
                                    <a href="{{url('/act')}}" class="btn btn-sm btn-primary">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="text-icon-squared animation animated fadeInUp">
                                <div class="hover"></div>
                                <div class="caption">
                                    <div class="icon-big"><span class="icon icon-technology"></span></div>
                                    <h5 class="title" style="height: 28px;">Fitness to Practice</h5>
                                    <div class="text" style="height: 48px;">keeping with our mandate of safeguarding the
                                        health of the public
                                    </div>
                                    <br>
                                    <a href="{{url('/fitness-to-practice')}}" class="btn btn-sm btn-primary">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="text-icon-squared animation animated fadeInUp">
                                <div class="hover"></div>
                                <div class="caption">
                                    <div class="icon-big"><span class="icon icon-email-filled-closed-envelope"></span>
                                    </div>
                                    <h5 class="title" style="height: 28px;">Registrations</h5>
                                    <div class="text" style="height: 48px;">Managing all health registrations in the
                                        country
                                    </div>
                                    <br>
                                    <a href="{{url('/registration-forms')}}" class="btn btn-sm btn-primary">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-services">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2> ONLINE SERVICES</h2>
                        <div class="text">
                            <p>Search Register, Registration Forms, Complains, Renewal</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-our-service" style="background-color: #106995;">
                        <br>
                        <a href="{{url('/banking-details')}}"><h4 style="color: #ffffff !important;">Renew
                                Annual Fees</h4></a>
                        <p style="color: #ffffff !important;">Settle your annual fees using different payment
                            methods</p>
                        <br>
                        <a href="{{url('/banking-details')}}" class="btn btn-sm btn-primary">
                            Pay Now
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-our-service" style="background-color: #106995;">
                        <br>
                        <a href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php" target="_blank"><h4
                                style="color: #ffffff !important;">Doctor's Register</h4></a>
                        <p style="color: #ffffff !important;"> Provides a list of doctors recognized as operational.</p>
                        <br>
                        <a href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php" target="_blank"
                           class="btn btn-sm btn-primary">
                            Find
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-our-service" style="background-color: #106995;">
                        <br>
                        <a href="{{url('/complaint')}}"><h4 style="color: #ffffff !important;">
                                Complaints</h4></a>
                        <p style="color: #ffffff !important;">Log your complaints with us. </p>
                        <br>
                        <br>
                        <a href="{{url('/complaint')}}" class="btn btn-sm btn-primary">
                            Find
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-our-service" style="background-color: #106995;">
                        <br>
                        <a href="#"><h4 style="color: #ffffff !important;">Portal</h4></a>
                        <p style="color: #ffffff !important;">Visit the MDPCZ Portal.</p>
                        <br>
                        <br>
                        <a href="https://portal.mdpcz.co.zw/" class="btn btn-sm btn-primary">
                            Visit Home Portal
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>Our Latest News</h2>
                <div class="text">
                    <p>There are many valid reasons why you should choose us to take care of your valuable device</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 hidden-sm col-xs-12">
                    <div class="default-blog-news">
                        <figure class="img-holder">
                            {{--<a href="#"><img src="images/blog/1.jpg" alt="News"></a>--}}
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{url('/council-examination')}}"><i class="fa fa-link"
                                                                                     aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <a href="{{url('/council-examination')}}"><h4>Upcoming Council Members Registration</h4></a>
                            <div class="post-meta">by admin / 14 Comments / 26 Feb</div>
                            {{--<div class="text">
                                <p>Nunc magna, pharetra aliquet malesuada quistion.except to obtain some advantage from it? But who has any right to find to enjoy a pleasure.</p>
                            </div>--}}
                            <div class="link">
                                <a href="#" class="default_link">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news">
                        <figure class="img-holder">
                            {{--<a href="#"><img src="images/blog/2.jpg" alt="News"></a>--}}
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{url('/banking-details')}}"><i class="fa fa-link"
                                                                                 aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <a href="{{url('/banking-details')}}"><h4>International Banking Details </h4></a>
                            <div class="post-meta">by admin / 22 Comments / 17 Apr</div>
                            {{--<div class="text">
                                <p>Phasellus nunc magna, pharetra aliquet malesuada quistion.</p>
                            </div>--}}
                            <div class="link">
                                <a href="#" class="default_link">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news">
                        <figure class="img-holder">
                            {{-- <a href="#"><img src="images/blog/3.jpg" alt="News"></a>--}}
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <a href="#"><h4>Phone Lines Notification</h4></a>
                            <div class="post-meta">by admin / 10 Comments / 14 June</div>
                            {{--<div class="text">
                                <p>Phasellus nunc magna, pharetra aliquet malesuada quistion.</p>
                            </div>--}}
                            <div class="link">
                                <a href="#" class="default_link">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="call-out2">
        <div class="container">
            <div class="clearfix">
                <div class="float_left">
                    <h4>Have any question or need any business consultation?</h4>
                </div>
                <div class="float_right">
                    <a href="{{url('/contact-us')}}" class="thm-btn bg-clr2">Reach Out to Us</a>
                </div>
            </div>

        </div>
    </div>

    {{--    <div class="brand-logo sec-padd">--}}
    {{--        <div class="container">--}}
    {{--            <ul class="brand-carousel">--}}
    {{--                <li><a href="#"><img src="images/brand/1.png" alt=""></a></li>--}}
    {{--                <li><a href="#"><img src="images/brand/2.png" alt=""></a></li>--}}
    {{--                <li><a href="#"><img src="images/brand/3.png" alt=""></a></li>--}}
    {{--                <li><a href="#"><img src="images/brand/4.png" alt=""></a></li>--}}
    {{--                <li><a href="#"><img src="images/brand/5.png" alt=""></a></li>--}}
    {{--                <li><a href="#"><img src="images/brand/6.png" alt=""></a></li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
