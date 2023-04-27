@extends('website.partials.layout')

@section('template_title')
    Home
@endsection

@section('site_content')
    <style>
        .reminder {
            font-weight: bold;
        }
    </style>

    <link rel="stylesheet" href="{{asset('home.css')}}">
    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area section">
        <!-- Hero Slider -->
        <div id="hero-slider" class="nivoSlider">
            <img src="{{asset('img/hero/vision.png')}}" alt=""
                 title="#herocaption-1"/>
            <img src="{{asset('img/hero/mission-01.png')}}" alt="" title="#herocaption-2"/>

            <img src="{{asset('img/hero/coreValues.png')}}" alt="" title="#herocaption-3"/>
        </div>
        <!-- Hero Slider Caption -->
        <div id="herocaption-1" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <!-- Hero Content -->
                    <div class="hero-content col-xs-12">
                       {{-- <h1 style="color: white;" class="wow cusFadeInRight" data-wow-duration=".5s"
                            data-wow-delay="0.5s">Our Vision</h1>
                        <p style="background-color:white;color: black;" class="wow cusFadeInRight"
                           data-wow-duration=".5s" data-wow-delay="1s">To be the referenced
                            regulatory authority in promoting excellence in standards of healthcare, education and
                            ethics.</p>--}}
                       {{-- <a href="{{url('/who_we_are')}}" class="learn-more wow cusFadeInRight" data-wow-duration=".5s"
                           data-wow-delay="1.5s">Who We Are</a>--}}

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
                       {{-- <h1 style="color: black;" class="wow cusFadeInRight" data-wow-duration=".5s"
                            data-wow-delay="0.5s">Our
                            Mission</h1>
                        <p style="background-color:white;color: black;" class="wow cusFadeInRight"
                           data-wow-duration=".5s"
                           data-wow-delay="1s">To promote the health of the public through licensing, education,
                            regulation and supervision of the Medical and Dental Professions.</p>--}}
                        {{--<a href="{{url('/who_we_are')}}" class="learn-more wow cusFadeInRight" data-wow-duration=".5s"
                           data-wow-delay="1.5s">Who We Are</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Slider Caption -->
        <div id="herocaption-3" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <!-- Hero Content -->
                    <div class="hero-content col-xs-12">
                        {{--<h1 style="color: black;" class="wow cusFadeInRight" data-wow-duration=".5s"
                            data-wow-delay="0.5s">
                            Core Values</h1>
                        <ol style="background-color:white;color: black;" class="wow cusFadeInRight"
                            data-wow-duration=".5s"
                            data-wow-delay="1s">
                            <li>
                                Justice <br/>Judgement of an ethical or unethical conduct based on its compatibility
                                with the
                                law, patients’ rights, fairness and balanced.
                            </li>
                            <li>
                                Professionalism <br/> Set of skills and values in medicine that characterizes the
                                essence of
                                humanism in professional work.
                            </li>
                            <li>
                                Ethics <br/> Refers to ethical morals and values that guide the medical and dental
                                profession in
                                decision making, medical practice medical education and research.
                            </li>
                            <li>
                                Continuous Quality Improvement <br/> progressive incremental improvement of processes,
                                safety and
                                patient care regulatory compliance.
                            </li>
                        </ol>--}}
                        {{--<a href="{{url('/who_we_are')}}" class="learn-more wow cusFadeInRight" data-wow-duration=".5s"
                           data-wow-delay="1.5s">Who We Are</a>--}}
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
                    <h4>Public Register ?</h4>
                    <br>
                    <div class="text-center center">
                        <a class="btn btn-primary btn-lg"
                           href="{{url('/public_register')}}" target="_blank">
                            Public Register
                        </a>
                    </div>
                </div>

                <div class="float_right">
                    <h4>Check Student Results Online</h4>
                    <br>
                    <div class="text-center center">
                        <a class="btn btn-primary" href="http://www.mdpcz.co.zw/mdpcz_results/" target="_blank">
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
                        <p style="color: black;font-size: 18px;font-weight: bold;">Search Register, Registration Forms,
                            Complaints, Renewal</p>
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
                                                            <h4 style="margin-top: 10px; font-weight: bold;"
                                                                class="my-flip-heading">
                                                                Renewal Annual Fees
                                                            </h4>
                                                            <div style="margin-top: 10px;" class="my-flip-text">
                                                                <p style="text-align: center">Annual Fees are due every
                                                                    31st of December</p>
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
                                                                href="{{url('/banking_details')}}"
                                                                class="btn btn-default btn-lg">Pay
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
                                                            <h4 style="margin-top: 10px; font-weight: bold;"
                                                                class="my-flip-heading">
                                                                PUBLIC REGISTER OF MEDICAL AND DENTAL PRACTITIONERS
                                                            </h4>
                                                            <div style="margin-top: 10px;" class="my-flip-text">
                                                                <p style="text-align: center">{{--Provides a list of doctors
                                                                    recognized as operational.--}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-flip-side my-flip-back my-flip-back-2">
                                                    <div class="my-flip-back-inner">
                                                        <div class="my-flip-price">
                                                            <h4 style="font-weight: bold;">PUBLIC REGISTER OF MEDICAL
                                                                AND DENTAL PRACTITIONERS </h4>
                                                        </div>

                                                        <p style="color: white;margin-top: 10px;margin-bottom:15px;font-size: 18px;">
                                                            {{--Provides a list of doctors recognized as operational.--}}</p>
                                                        <div class="my-flip-btn-box"><a
                                                                href="{{url('/public_register')}}"
                                                                target="_blank" class="btn btn-default btn-lg">
                                                                ClICK TO VIEW PUBLIC REGISTER
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
                                                            <h4 style="margin-top: 10px; font-weight: bold;"
                                                                class="my-flip-heading">
                                                                Complaints
                                                            </h4>
                                                            <div style="margin-top: 10px;" class="my-flip-text">
                                                                <p style="text-align: center">Log your complaints with
                                                                    us.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-flip-side my-flip-back my-flip-back-3">
                                                    <div class="my-flip-back-inner">
                                                        <div class="my-flip-price">
                                                            <h4 style="font-weight: bold;">Complaints</h4>
                                                        </div>
                                                        <p style="color: white;margin-top: 10px;margin-bottom:15px;font-size: 18px;">
                                                            Log your complaints with us.</p>
                                                        <div class="my-flip-btn-box"><a
                                                                href="{{url('/complaint')}}" target="_blank"
                                                                class="btn btn-default btn-lg">
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
                                                            <h4 style="margin-top: 10px; font-weight: bold;"
                                                                class="my-flip-heading">
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
                                                        <p style="color: white;margin-top: 10px;margin-bottom:15px;font-size: 18px;">
                                                            Coming Soon.</p>
                                                        <div class="my-flip-btn-box"><a
                                                                href="{{url('#')}}" target="_blank"
                                                                class="btn btn-default btn-lg">
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
                <div class="row mt-5">
                    <div class="col-md-12 offset-md-2">
                        <div class="card">
                            <div style="font-weight:bold;font-size:25px;" class="card-header">
                                Important Reminders
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item reminder" style="color:black;">Annual Fees are due every 31st
                                    of December.
                                </li>
                                <li class="list-group-item reminder" style="color:black;">Exams are scheduled March,
                                    June
                                    and October of each year.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12 offset-md-2">
                        <div class="card">
                            <div style="font-weight:bold;font-size:25px;" class="card-header">
                                Our Newsletters
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($newsletters as $newsletter)
                                    <li class="list-group-item"><a href="{{asset($newsletter->file)}}" target="_blank">{{$newsletter->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

               {{-- <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Latest Events</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="path/to/event1.jpg" alt="Event 1">
                                            <div class="caption">
                                                <h4>Event 1</h4>
                                                <p>Event 1 description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="path/to/event2.jpg" alt="Event 2">
                                            <div class="caption">
                                                <h4>Event 2</h4>
                                                <p>Event 2 description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="path/to/event3.jpg" alt="Event 3">
                                            <div class="caption">
                                                <h4>Event 3</h4>
                                                <p>Event 3 description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}

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
                                    <div class="icon-big"><span class="fa fa-info-circle"></span></div>
                                    <h5 class="title" style="height: 28px;">Internal and External Polices</h5>

                                    <br>
                                    <a href="{{url('/policy_guideline')}}" class="btn btn-sm btn-primary">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="text-icon-squared animation animated fadeInUp">
                                <div class="hover"></div>
                                <div class="caption">
                                    <div class="icon-big"><span class="fa fa-info-circle"></span></div>
                                    <h5 class="title" style="height: 28px;">Fitness to Practice</h5>

                                    <br>
                                    <a href="{{url('/fitness_to_practice')}}" class="btn btn-sm btn-primary">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="text-icon-squared animation animated fadeInUp">
                                <div class="hover"></div>
                                <div class="caption">
                                    <div class="icon-big"><span class="fa fa-info-circle"></span>
                                    </div>
                                    <h5 class="title" style="height: 28px;">Registrations</h5>

                                    <br>
                                    <a href="{{url('/registration_pathway')}}" class="btn btn-sm btn-primary">
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
                    <a href="{{url('/contact_us')}}" class="thm-btn bg-clr2">Reach Out to Us</a>
                </div>
            </div>

        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        const reminders = document.querySelectorAll('.reminder');

        function flicker(reminder) {
            reminder.style.color = reminder.style.color == 'red' ? 'black' : 'red';
        }

        reminders.forEach(reminder => {
            setInterval(() => flicker(reminder), 1500);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
@endsection
