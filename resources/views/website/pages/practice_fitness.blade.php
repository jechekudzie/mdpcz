<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 11:14 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Fitness To Practice
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Fitness To Practice</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Fitness To Practice
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div style="margin-top: 10px;" class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">EDUCATION</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/council_examination')}}">Council
                                    Examination</a></li>
                            <li class="list-group-item"><a href="{{url('/fitness_to_practice')}}">Fitness to
                                    Practice</a></li>
                            <li class="list-group-item"><a href="{{url('/training_institution')}}">Accreditation</a>
                            </li>
                            <li class="list-group-item"><a href="{{url('/log_book')}}">Log Books</a></li>
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
                <div style="margin-top: 10px;" class="col-md-9 col-sm-12">
                    <div class="wpb_wrapper">
                        {!! $fitness_to_practice->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
