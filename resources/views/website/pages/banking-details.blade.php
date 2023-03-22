<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:47 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Banking Details
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Banking Details</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Banking Details
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">

                @foreach($banking_details as $banking_detail)
                    <div class="col-md-6 col-sm-12">
                        <div class="about-text">
                            <h2>
                                Account type <span class="thm-color">{{$banking_detail->title}} </span>
                            </h2>
                            <div class="text">
                                {!! $banking_detail->description !!}
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>




@endsection
