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
                <div class="col-md-12 col-sm-12">
                    @foreach($our_resources as $our_resource)
                        <div class="about-text">
                            <h2>
                                {{$our_resource->title}}
                            </h2>
                            <div class="project-single col-md-12 col-sm-12">
                                <div class="single-project-info">
                                    <ul class="list-item">
                                        <li><a href="{{asset($our_resource->file)}}" target="_blank">Download / View {{$our_resource->title}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection
