<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 12:33 PM
 */ ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>@hasSection('template_title')@yield('template_title')  | @endif Medical and Dental Practitioners Council of Zimbabwe</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifes')}}t">
    <link rel="mask-icon" href="{{asset('safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <![endif]-->

</head>


<body>
<!-- PRELOADER -->
{{--<div class="page-loader">
    <div class="loader">Loading...</div>
</div>--}}
<!-- /PRELOADER -->
<div class="boxed_wrapper cleaning_demo">

@include('website.partials.nav')

    @yield('site_content')

    <footer>
        <div class="footer-main sec-padd2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col">
                            <div style="background-color: white;" class="logo-part">
                                <a href="{{url('/')}}" class="footer-logo text-uppercase">
                                    <img src="{{asset('images/mdpcz.png')}}" alt="logo">
                                </a>
                            </div>
                            <p class="footer-words">Promoting the health of the population of Zimbabwe through guiding the Medical and Dental Professions.</p>
                            <ul class="list-inline footer-social">
                                <li><a href="https://www.facebook.com/mdpcz2019" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/MDPCZ2" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col post-column">
                            <h3 class="footer-title">Bulawayo Office</h3>
                            <div class="post-list">
                                <div>
                                    <h5 style="color: white">No 2 Robertson Street</h5>
                                    <p>Parkview <br>
                                        Bulawayo, Zimbabwe<br>
                                        Whatsapp: 263 71 254 4066<br>
                                        Land: 263 9 72237/38<br>
                                        E-mail:mdpcz@mdpcz.co.zw<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col post-column">
                            <h3 class="footer-title">Harare Office</h3>
                            <div class="post-list">
                                <div>
                                    <h5 style="color: white">No 8 Harvey Brown</h5>
                                    <p>Milton Park<br>
                                        Harare, Zimbabwe<br>
                                        Whatsapp: 263 71 254 4066<br>
                                        Land: 2263-242-790144, 263-242-793707<br>
                                        E-mail:mdpcz@mdpcz.co.zw<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p class="copyright">© {{date('Y')}} MDPCZ. All rights reserved</p>
                    </div>
                   {{-- <div class="col-md-9">
                        <nav class="footer-menu pull-right">
                            <ul class="list-inline">
                                <li><a href="#">home</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">term &amp; condition</a></li>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="contact_us.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>--}}
                </div>
            </div>
        </div>
    </footer>


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <!-- main jQuery /-->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- jQuery plugins /-->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- jQuery meanmenu /-->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- bootstrap /-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- bx slider /-->
    <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
    <!-- count to /-->
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <!-- owl carousel /-->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- validate /-->
    <script src="{{asset('js/validation.js')}}"></script>
    <!-- mixit up /-->
    <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
    <!-- easing /-->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <!-- gmap helper /-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <!--gmap script /-->
    <script src="{{asset('js/gmaps.js')}}"></script>
    <script src="{{asset('js/map-helper.js')}}"></script>
    <!-- fancy box /-->
    <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <!-- isotope script /-->
    <script src="{{asset('js/isotope.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.bootstrap-touchspin.js')}}"></script>

    <!-- jQuery ui js /-->
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/SmoothScroll.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- thm custom script /-->
    <script src="{{asset('js/custom.js')}}"></script>
</div>
</body>

</html>
