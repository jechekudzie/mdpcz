<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 1:50 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Council Structure
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Council Structure</h1>
            <div style="display:none" class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Council Structure
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
                            <li class="list-group-item"><a href="{{url('/who_we_are')}}">Who We Are</a></li>
                            <li class="list-group-item"><a href="{{url('/what_we_do')}}">What We Do</a></li>
                            <li class="list-group-item"><a href="{{url('/our_history')}}">Our History</a></li>
                            <li class="list-group-item"><a href="{{url('/council_structure')}}">Council Structure</a></li>
                            <li class="list-group-item"><a href="{{url('/council_members')}}">Council Members</a></li>
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
                <div class="col-md-9 col-sm-12">
                    <figure class="about-img">
                       {{-- <img src="{{asset('images/mdpcz_structure.jpg')}}" alt="about photo">--}}
                        <img src="{{asset($council_structure->file)}}" alt="about photo">
                    </figure>
                    <hr/>
                    <div class="about-text">
                        @foreach($committees as $committee)
                        <h4>
                             <span class="thm-color">{{$committee->name}} </span>
                        </h4>
                        <br>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
