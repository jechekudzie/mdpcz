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
                <div class="col-md-12 col-sm-12">
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


                </div>
            </div>
        </div>
    </div>

@endsection
