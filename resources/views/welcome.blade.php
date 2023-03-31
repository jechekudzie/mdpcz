@extends('website.partials.layout')

@section('template_title')
    Home
@endsection


@section('site_content')

    <link rel="stylesheet" href="{{asset('home.css')}}">
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
                           data-wow-delay="1.5s">What we do
                        </a>
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
                        <h1 style="color: blue;" class="wow cusFadeInRight" data-wow-duration=".5s"
                            data-wow-delay="0.5s">For
                            Professions</h1>
                        <p style="color: red;font-weight: bold" class="wow cusFadeInRight" data-wow-duration=".5s"
                           data-wow-delay="1s">Regulate, control and
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
                        <a class="btn btn-primary btn-lg"
                           href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php" target="_blank">
                            Find Registered Practitioners
                        </a>
                    </div>
                </div>

                <div class="float_right">
                    <h4>Check Student Results Online</h4>
                    <br>
                    <div class="text-center center">
                        <a class="btn btn-primary btn-lg" href="http://www.mdpcz.co.zw/mdpcz_results/" target="_blank">
                            Check Results
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="our-services">
        <div class="container-fluid">
            <div class="col-lg-7 col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">ONLINE SERVICES</h3>
                    </div>
                    <div class="panel-body">
                        <p style="color: black;font-size: 18px;font-weight: bold;">Search Register, Registration Forms, Complaints, Renewal</p>
                        <section style="padding-top: 20px;" class="section-tours">
                            <div class="row">
                                <div style="padding-bottom: 15px" class="col-lg-6 mb-4">
                                    <div class="my-flip-container">
                                        <div class="my-flip-inner my-flip-right">
                                            <div class="my-flip-inner-wrapper">

                                                <div class="my-flip-side my-flip-front">
                                                    <div class="my-flip-details">
                                                        <div align="center">
                                                            <span style="text-align: center;"><i
                                                                    class="fa fa-credit-card"></i></span>
                                                            <h4 style="margin-top: 10px; font-weight: bold;" class="my-flip-heading">
                                                                Renewal Annual Fees
                                                            </h4>
                                                            <div style="margin-top: 10px;" class="my-flip-text">
                                                                <p style="text-align: center">Settle your annual fees using different payment
                                                                    methods.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-flip-side my-flip-back my-flip-back-1">
                                                    <div class="my-flip-back-inner">
                                                        <div class="my-flip-price">
                                                            <h4 style="font-weight: bold;">Pay Your Fees</h4>
                                                        </div>
                                                        <div class="my-flip-back-text">
                                                            <ul>
                                                                <li>Bank Deposits</li>
                                                                <li>Ecocash</li>
                                                                <li>Paynow</li>
                                                            </ul>
                                                        </div>
                                                        <div class="my-flip-btn-box"><a
                                                                href="{{url('/banking-details')}}" class="btn btn-default btn-lg">Pay
                                                                Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-bottom: 15px" class="col-lg-6 mb-4">
                                    <div class="my-flip-container">
                                        <div class="my-flip-inner my-flip-right">
                                            <div class="my-flip-inner-wrapper">
                                                <div class="my-flip-side my-flip-front">
                                                    <div class="my-flip-details">
                                                        <div align="center">
                                                            <span style="text-align: center;"><i
                                                                    class="fa fa-registered"></i></span>
                                                            <h4 style="margin-top: 10px; font-weight: bold;" class="my-flip-heading">
                                                                Doctors' Register
                                                            </h4>
                                                            <div style="margin-top: 10px;" class="my-flip-text">
                                                                <p style="text-align: center">Provides a list of doctors recognized as operational.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-flip-side my-flip-back my-flip-back-2">
                                                    <div class="my-flip-back-inner">
                                                        <div class="my-flip-price">
                                                            <h4 style="font-weight: bold;">Doctors' Register</h4>
                                                        </div>

                                                        <p  style="color: white;margin-top: 10px;margin-bottom:15px;font-size: 18px;">Provides a list of doctors recognized as operational.</p>
                                                        <div class="my-flip-btn-box"><a
                                                                href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php" target="_blank" class="btn btn-default btn-lg">
                                                                View Doctors's Register
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-bottom: 15px" class="col-lg-6 mb-4">
                                    <div class="my-flip-container">
                                        <div class="my-flip-inner my-flip-right">
                                            <div class="my-flip-inner-wrapper">
                                                <div class="my-flip-side my-flip-front">
                                                    <div class="my-flip-details">
                                                        <div align="center">
                                                            <span style="text-align: center;"><i
                                                                    class="fa fa-book"></i></span>
                                                            <h4 style="margin-top: 10px; font-weight: bold;" class="my-flip-heading">
                                                                Complaints
                                                            </h4>
                                                            <div style="margin-top: 10px;" class="my-flip-text">
                                                                <p style="text-align: center">Log your complaints with us.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-flip-side my-flip-back my-flip-back-3">
                                                    <div class="my-flip-back-inner">
                                                        <div class="my-flip-price">
                                                            <h4 style="font-weight: bold;">Complaints</h4>
                                                        </div>
                                                        <p  style="color: white;margin-top: 10px;margin-bottom:15px;font-size: 18px;">Log your complaints with us.</p>
                                                        <div class="my-flip-btn-box"><a
                                                                href="{{url('/complaint')}}" target="_blank" class="btn btn-default btn-lg">
                                                                Send your complaint
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-bottom: 15px" class="col-lg-6 mb-4">
                                    <div class="my-flip-container">
                                        <div class="my-flip-inner my-flip-right">
                                            <div class="my-flip-inner-wrapper">
                                                <div class="my-flip-side my-flip-front">
                                                    <div class="my-flip-details">
                                                        <div align="center">
                                                            <span style="text-align: center;"><i
                                                                    class="fa fa-users"></i></span>
                                                            <h4 style="margin-top: 10px; font-weight: bold;" class="my-flip-heading">
                                                                Portal
                                                            </h4>
                                                            <div style="margin-top: 10px;" class="my-flip-text">
                                                                <p style="text-align: center">Visit MDPCZ Portal.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-flip-side my-flip-back my-flip-back-4">
                                                    <div class="my-flip-back-inner">
                                                        <div class="my-flip-price">
                                                            <h4 style="font-weight: bold;">Portal</h4>
                                                        </div>
                                                        <p  style="color: white;margin-top: 10px;margin-bottom:15px;font-size: 18px;">Coming Soon.</p>
                                                        <div class="my-flip-btn-box"><a
                                                                href="{{url('#')}}" target="_blank" class="btn btn-default btn-lg">
                                                                Visit Portal
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="classic-tab-wrap py-3">
                    <div class="heading-tab">
                        <h3>COUNCIL UPDATES</h3>
                    </div>
                    <div class="tab-wrap">
                        <ul class="nav nav-tabs" id="classicTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="classic-1-tab" data-toggle="tab" href="#classic-1" role="tab"
                                   aria-controls="classic-1" aria-selected="true">NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="classic-2-tab" data-toggle="tab" href="#classic-2" role="tab"
                                   aria-controls="classic-2" aria-selected="false">EVENTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="classic-3-tab" data-toggle="tab" href="#classic-3" role="tab"
                                   aria-controls="classic-3" aria-selected="false">IMPORTANT LINKS</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="classicTabContent">
                            <div class="tab-pane fade active" id="classic-1" role="tabpanel" aria-labelledby="classic-1-tab">
                                classic Tab 1
                            </div>
                            <div class="tab-pane fade" id="classic-2" role="tabpanel" aria-labelledby="classic-2-tab">
                                classic Tab 2
                            </div>
                            <div class="tab-pane fade" id="classic-3" role="tabpanel" aria-labelledby="classic-3-tab">
                                classic Tab 3
                            </div>
                        </div>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
