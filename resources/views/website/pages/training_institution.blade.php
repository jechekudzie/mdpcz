<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/4/2023
 * Time: 5:08 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Medical / Dental Training Institutions
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Medical / Dental Training Institutions</h1>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">


            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">EDUCATION</div>
                        <!-- List group -->
                        <ul class="list-group">

                            <li class="list-group-item"><a href="{{url('/council_examination')}}">Council Registration Assessment</a></li>
                            <li class="list-group-item"><a href="{{url('/training_institution')}}">Medical / Dental Training Institutions</a></li>
                            <li class="list-group-item"><a href="{{url('/internship_institution')}}">Medical / Dental Teaching Units</a></li>
                            {{-- <li class="list-group-item"><a href="{{url('/contact_us')}}">Request Log Books</a></li>--}}

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

                <div style="text-align:center;" class="col-md-9 col-sm-12">
                    <div class="about-text">
                        <h4 style="padding-bottom:15px;">MEDICAL / DENTAL TRAINING INSTITUTIONS</h4>
                        <ul class="list-unstyled">
                            <div class="row">
                                @foreach($training_institutions as $training_institution)
                                    <div style="text-align:left" class="col-md-6 col-lg-6 col-sm-12">
                                        <li>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">
                                                        <a href="{{$training_institution->website_link}}"
                                                           target="_blank">
                                                            {{$training_institution->name}}
                                                        </a>
                                                    </h5>
                                                    <p>{{$training_institution->address}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                @endforeach
                            </div>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection
