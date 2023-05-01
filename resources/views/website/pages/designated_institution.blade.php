<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/4/2023
 * Time: 5:08 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Designated Health Institutions
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Designated Health Institutions</h1>
            <div style="display:none" class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Designated Health Institutions
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">


            <div class="row">
                <div class="col-md-3 col-sm-12">
                    {{--<div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">DESIGNATED INSTITUTIONS</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/registration_pathway')}}">Registration
                                    Pathway</a></li>
                            <li class="list-group-item"><a href="{{url('/registration_forms')}}">Registration Forms</a>
                            </li>
                            <li class="list-group-item"><a
                                    href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php">Public
                                    Register</a></li>

                        </ul>
                    </div>--}}
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
                        <h4 style="padding-bottom:15px;">Designated Health Institutions(DHIs)</h4>
                        <ul class="list-unstyled">
                            <div class="row">
                                @foreach($designated_institutions->sortBy('name') as $institution)
                                    <div style="text-align:left" class="col-md-6 col-lg-6 col-sm-12">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">
                                                    <a href="{{$institution->website_link}}"
                                                       target="_blank">
                                                        {{$institution->name}}
                                                    </a>
                                                </h5>
                                                <p>{{$institution->address}}</p>
                                            </div>
                                        </div>
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
