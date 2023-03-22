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
                            <h4>Quick Complaint</h4>
                            <p>Generally doctors treating patients are willing to address patients’ concerns directly.
                                If you have a concern about your Doctor that involves his/her conduct, communication or
                                treatment you should feel free to openly discuss these issues with him/her. However, if
                                you fail to reach a consensus you may choose to file a complaint with the Council for
                                further investigation. </p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End contact form area-->


@endsection