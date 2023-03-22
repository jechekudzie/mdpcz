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
                <div class="wpb_wrapper">
                    {!! $fitness_to_practice->description !!}
                </div>
            </div>
        </div>
    </div>




@endsection
