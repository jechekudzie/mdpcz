<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 2:03 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Committees
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Committees</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Committees
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
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
                        <div class="panel-heading">Quick Links</div>
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

                <div style="margin-top: -80px;" class="col-md-9 col-sm-12">
                    <div class="about-text">
                        <div class="accordion-box">
                        @foreach($committees as $committee)
                            <!--Start single accordion box-->
                                <div class="accordion accordion-block">
                                    <div style="background-color:white/*#3A25AC*/;" class="accord-btn">
                                        <h3 style="color: black;">{{$committee->name}} <span> {{$committee->section}}</span></h3>
                                    </div>
                                    <div class="accord-content {{--collapsed--}}">
                                        {!! $committee->description !!}
                                    </div>
                                </div>
                                <!--End single accordion box-->
                            @endforeach
                        </div>
                    </div>


                </div>

               {{-- <div class="col-md-9 col-sm-12">
                    @foreach($committees as $committee)
                        <div class="about-text">
                            <h2>
                                {{$committee->name}} <span class="thm-color"> {{$committee->section}}</span>
                            </h2>
                            <div class="project-single col-md-12 col-sm-12">
                                <div class="single-project-info">
                                    <ul class="list-item">
                                        <li>{!! $committee->description !!}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach


                </div>--}}
            </div>
        </div>
    </div>

@endsection
