<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:54 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Online Services
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Online Services</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Online Services
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <figure class="about-img">
                        <img src="{{asset('images/online-1.jpg')}}" alt="about photo">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <h4>
                            Online Registered : <a href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php"><span class="thm-color">Practitioner </span></a>
                        </h4>
                        <br>
                        <h4>
                            Online : <a href="https://www.paynow.co.zw/Payment/BillPaymentLink/?q=aWQ9MjgxNSZhbW91bnQ9MC4wMCZhbW91bnRfcXVhbnRpdHk9MC4wMCZsPTA%3d"><span class="thm-color">Payments </span></a>
                        </h4>
                        <br>
                        <h4>
                            Download : <a href="{{url('/registration-forms')}}"><span class="thm-color">Forms </span></a>
                        </h4>
                        <br>

                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection
