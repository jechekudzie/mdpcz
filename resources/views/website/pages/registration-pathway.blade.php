<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/4/2023
 * Time: 5:08 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Registration Pathway
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Registration Pathway</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Registration Pathway
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <h4>Designated Health Institutions(DHIs)</h4>
                    <p style="color: black;"> Government Health Institutions, Mission Hospitals, City Heath Centres and any approved  DHI by  the Council.</p>
                    <br>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <h4>
                            {{$registration_pathway->title}}: <a href="{{asset($registration_pathway->file)}}" target="_blank"><span class="thm-color">View/Download </span></a>
                        </h4>
                        <br>

                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection
