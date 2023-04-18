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
                        <form id="contact-page-form" name="contact_form" class="default-form" action="mail.php"
                              method="post">
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
                        <ul class="list-inline footer-social">
                            <li><a href="https://www.facebook.com/mdpcz2019" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/MDPCZ2" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <div class="title">
                            <h4>Quick Contact</h4>
                            <p>If you are passionate about helping people: through education, or preventing then
                                you </p>
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
                                    <p>263-242-790144,<br/> 263-242-793707</p>
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
        <div class="container">

            <div class="col-md-6 col-lg-6 col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1872.8683193281008!2d28.590573933219076!3d-20.145031971158737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1eb5547b516b1c0b%3A0xd99e4dee55bd5a62!2sMDPCZ%20bulawayo!5e0!3m2!1sen!2szw!4v1681848073812!5m2!1sen!2szw"
                    width="600" height="450" style="border:0; margin:20px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d952.9399866652896!2d31.0385668958234!3d-17.811862077046772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a50f321888db%3A0x2f83b7a5095707cc!2sMedical%20and%20Dental%20Practitioners%20council%20of%20Zimbabwe!5e0!3m2!1sen!2szw!4v1681848128680!5m2!1sen!2szw"
                    width="600" height="450" style="border:0;margin:20px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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