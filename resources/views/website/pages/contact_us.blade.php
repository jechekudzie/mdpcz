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
            <div style="display:none" class="breadcrumbs_path">
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
                    @if(session('message'))
                    <div class="container">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Success!</strong> Your message has been sent successfully!
                        </div>
                    </div>
                    @endif
                    <div class="contact-form">

                        <form action="{{url('/submitContactForm')}}" method="post" {{--id="contact-page-form"--}} {{--class="default-form"--}} >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name*" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Mail*" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Your Message.." required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="thm-btn bg-clr1" type="submit" >Send Message</button>
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
                    <div style="background-color:#2470a6;font-weight:bold;" class="footer-contact-info">
                        <div class="title">
                            <h4>Contact Us</h4>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <div class="text-holder">
                                    <h6>HARARE OFFICE</h6>
                                    <p>8 Harvey Brown</p>
                                    <p>Milton Park, Harare, Zimbabwe</p>
                                    <p>Whatsapp: 263 71 254 4066</p>
                                </div>
                            </li>

                            <li>
                                <div class="text-holder">
                                    <h6>BULAWAYO OFFICE</h6>
                                    <p>No 2 Robertson Street</p>
                                    <p>Parkview, Bulawayo, Zimbabwe</p>
                                    <p>Whatsapp: 263 71 254 4066</p>
                                </div>
                            </li>

                            <li>
                                <div class="text-holder">
                                    <h6>Call Us</h6>
                                    <p>263-242-790144,<br/> 263-242-793707</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-holder">
                                    <h6>COUNCIL Email</h6>
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
@endsection
