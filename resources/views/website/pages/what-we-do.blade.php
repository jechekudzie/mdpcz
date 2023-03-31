<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 1:11 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    What We Do
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>What We Do</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; What We Do
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div style="margin-top: 30px;" class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">ABOUT US</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/registrar')}}">Registrar</a></li>
                            <li class="list-group-item"><a href="{{url('/what-we-do')}}">What We Do</a></li>
                            <li class="list-group-item"><a href="{{url('/our-history')}}">Our History</a></li>
                            <li class="list-group-item"><a href="{{url('/council-structure')}}">Council Structure</a>
                            </li>
                            <li class="list-group-item"><a href="{{url('/council-members')}}">Council Members</a></li>
                            <li class="list-group-item"><a href="{{url('/committees')}}">Committees</a></li>

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
                <div style="margin-top: -50px;" class="col-md-9 col-sm-12">
                    <div class="about-text">
                        <div class="accordion-box">
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div style="background-color:#3A25AC;" class="accord-btn active"><h1
                                        style="color: white;">What we do</h1></div>
                                <div class="accord-content collapsed">
                                    {!! $what_we_do->description !!}
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div style="background-color:#3A25AC;" class="accord-btn active"><h1
                                        style="color: white;">Council functions</h1></div>
                                <div class="accord-content collapsed">
                                    <p {!! $what_we_do->council_functions !!}
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
