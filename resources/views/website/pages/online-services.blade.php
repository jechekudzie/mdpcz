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
                <div style="margin-top: 30px;" class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">THE PROFESSION</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/online-services')}}">Online Services</a></li>
                            <li class="list-group-item"><a href="{{url('/registers')}}">Registers</a></li>
                            <li class="list-group-item"><a href="{{url('/council-examination')}}">Council Examination</a></li>
                            <li class="list-group-item"><a href="{{url('/fitness-to-practice')}}">Fitness to Practice</a></li>
                            <li class="list-group-item"><a href="{{url('/policy_guideline')}}">Policies & Guidelines</a></li>
                            <li class="list-group-item"><a href="{{url('/act')}}">Acts</a></li>

                        </ul>
                    </div>
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">QUICK LINKS</div>
                        <!-- List group -->
                        <ul class="list-group">
                            @foreach($quick_links as $quick_link)
                                <li class="list-group-item">
                                    <a href="{{$quick_link->url}}" target="_blank">{{$quick_link->title}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

                <div style="margin-top: 30px;" class="col-md-3 col-sm-12">
                    <img src="{{asset('online-1.jpeg')}}">
                </div>
                <div style="margin-top: -50px;" class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <div class="accordion-box">
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                               {{-- <div style="background-color:white;" class="accord-btn active"><h1
                                        style="color: black;">ONLINE SERVICES</h1>
                                </div>--}}
                                <div class="accord-content collapsed">
                                    <ul>
                                        <li style="padding: 10px;">
                                            <a class="btn btn-primary btn-lg" href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php"
                                                                      style="text-transform: capitalize;width: 300px;" target="_blank">Online Registered
                                                Practitioners</a>
                                        </li>
                                        <li style="padding: 10px;">
                                            <a class="btn btn-primary btn-lg" href="https://www.paynow.co.zw/Payment/BillPaymentLink/?q=aWQ9MjgxNSZhbW91bnQ9MC4wMCZhbW91bnRfcXVhbnRpdHk9MC4wMCZsPTA%3d"
                                               style="text-transform: capitalize;width: 300px;" target="_blank">Online Payments</a>
                                        </li>
                                        <li style="padding: 10px;">
                                            <a class="btn btn-primary btn-lg" href="{{url('/registration-forms')}}"
                                               style="text-transform: capitalize;width: 300px;">Download Registration Forms</a>
                                        </li>
                                        <li style="padding: 10px;"><a class="btn btn-primary btn-lg" href="{{url('/act')}}" style="text-transform: capitalize;width: 300px;">Download Acts</a></li>
                                        <li style="padding: 10px;"><a class="btn btn-primary btn-lg" href="{{url('/policy_guideline')}}" style="text-transform: capitalize;width: 300px;">Download Policies and Guidelines</a></li>
                                    </ul>

                                </div>
                            </div>
                            <!--End single accordion box-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection
