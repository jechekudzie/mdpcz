<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 2:03 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Resources
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Resources</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Resources
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
                        <div class="panel-heading">THE PUBLIC</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/complaint')}}">Complaints</a></li>
                            <li class="list-group-item"><a href="{{url('/our_resource')}}">Resources</a></li>
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
                <div class="col-md-9 col-sm-12">
                    @foreach($our_resources as $our_resource)
                        <div class="about-text">
                            <h4 style="font-weight: bold;">
                                {{$our_resource->title}}
                            </h4>
                            <iframe src="{{asset($our_resource->file)}}" width="300px" height="300px"></iframe>
                        </div>
                        <br>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection
