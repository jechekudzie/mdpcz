<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 1:00 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Contact Us
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Contact
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <!--Start contact form area-->
    <div class="contact-form-area sec-padd-top">
        <div class="container">
            <div class="row">

                <div class="col-md-8">

                    <div class="contact-form">
                        <form id="contact-page-form" name="contact_form" class="default-form" action="mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" value="" placeholder="Your Name*" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" value="" placeholder="Your Mail*" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="phone" value="" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="Subject" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Your Message.." required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="thm-btn bg-clr1" type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <div class="title">
                            <h4>Quick Contact</h4>
                            <p>If you are passionate about helping people: through education, or preventing then you </p>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <div class="iocn-holder">
                                    <span class="fa fa-home"></span>
                                </div>
                                <div class="text-holder">

                                    <h6>8 Harvey Brown</h6>
                                    <p>Milton Park, Harare, Zimbabwe</p>
                                    <p>Whatsapp: 263 71 254 4066</p>
                                </div>
                            </li>

                            <li>
                                <div class="iocn-holder">
                                    <span class="fa fa-home"></span>
                                </div>
                                <div class="text-holder">

                                    <h6>No 2 Robertson Street</h6>
                                    <p>Parkview, Bulawayo, Zimbabwe</p>
                                </div>
                            </li>


                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-technology-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Call Us On</h6>
                                    <p>263 4 792195 , 2933177/8</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-letter-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Mail Us @</h6>
                                    <a href="#"><p>mdpcz@mdpcz.co.zw</p></a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End contact form area-->

   {{-- <div class="home-google-map">
        <div
            class="google-map"
            id="contact-google-map"
            data-map-lat="51.507192"
            data-map-lng="-0.127265"
            data-icon-path="images/icon/marker.png"
            data-map-title="Services"
            data-map-zoom="10" >

        </div>

    </div>

    <div class="brand-logo sec-padd">
        <div class="container">
            <ul class="brand-carousel">
                <li><a href="#"><img src="images/brand/1.png" alt=""></a></li>
                <li><a href="#"><img src="images/brand/2.png" alt=""></a></li>
                <li><a href="#"><img src="images/brand/3.png" alt=""></a></li>
                <li><a href="#"><img src="images/brand/4.png" alt=""></a></li>
                <li><a href="#"><img src="images/brand/5.png" alt=""></a></li>
                <li><a href="#"><img src="images/brand/6.png" alt=""></a></li>
            </ul>
        </div>
    </div>--}}
@endsection
