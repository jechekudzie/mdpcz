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
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Council Structure
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <figure class="about-img">
                        <img src="{{asset('images/mdpcz_structure.jpg')}}" alt="about photo">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <h4>
                            PCC:  <span class="thm-color">Practice Control Committee </span>
                        </h4>
                        <br>
                        <h4>
                            PIC:  <span class="thm-color">Preliminary Inquiries Committee </span>
                        </h4>
                        <br>
                        <h4>
                            HEALTH:  <span class="thm-color">Health Committee </span>
                        </h4>
                        <br>
                        <h4>
                            ELC:  <span class="thm-color">Education and Liaison Committee </span>
                        </h4>
                        <br>
                        <h4>
                            B & F: <span class="thm-color">Business and Finance </span>
                        </h4>
                        <br>
                        <h4>
                            AUDIT:  <span class="thm-color">Audit Committee </span>
                        </h4>
                        <br>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
