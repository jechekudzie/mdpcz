<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 1:00 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Complaints
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Complaints</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Complaint
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
                                <strong>Success!</strong> Your complaint has been sent successfully!
                            </div>
                        </div>
                    @endif
                    <div class="contact-form">
                        <form action="{{url('/submitComplaintForm')}}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Mail*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>

                                <div class="col-md-6">
                                    <select name="category" class="select">
                                        <option>About Staff Member</option>
                                        <option>About Doctor</option>
                                        <option>About Health Institution</option>
                                    </select>
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
                    <div style="background-color:#2470a6;color:white;" class="footer-contact-info">
                        <div class="title">
                            <p>If you have any complaint fill in the form or contact us on the email below. </p>
                            <a style="color:white;" href="mailto:complaints@mdpcz.co.zw">complaints@mdpcz.co.zw</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End contact form area-->


@endsection
