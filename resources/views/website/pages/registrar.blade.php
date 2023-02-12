<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 1:03 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Registrar
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Registrar</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Registrar
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <figure class="about-img">
                        <img src="{{asset('images/registrar.jpg')}}" alt="about photo">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <h2>
                            B.Management  <span class="thm-color">(HR),MBA,DIP Law </span>
                        </h2>
                        <div class="text">
                            <p>It goes without saying that we are living in a new era of expectation by both the public whom we serve as well as the profession whom we guide in the delivery of heath care.Our council as a regulator must reflect this reality.
                                <br><br>

                                As secretariat we will continue with the implementation of council resolutions with speed to ensure that members of the profession are served  efficiently.We will continue to protect the image of the council by following set down policies and processes by the council.</p>
                        </div>
                        <div class="fact-counter">
                            <ul>
                                <li class="single-fact-counter">
                                    <span class="ficon"><i class="fa fa-trophy" aria-hidden="true"></i></span><span class="timer" data-from="1" data-to="12" data-speed="5000" data-refresh-interval="50">12</span>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <h3>Years Operating</h3>
                                </li>
                                <li class="single-fact-counter">
                                    <span class="ficon"><i class="fa fa-smile-o" aria-hidden="true"></i></span><span class="timer" data-from="1" data-to="900" data-speed="5000" data-refresh-interval="50">900</span>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <h3>Registered Practitioners </h3>
                                </li>
                                <li class="single-fact-counter">
                                    <span class="ficon"><i class="fa fa-television" aria-hidden="true"></i></span><span class="timer" data-from="1" data-to="8650" data-speed="5000" data-refresh-interval="50">8650</span>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <h3>Practising Students</h3>
                                </li>
                            </ul>
                        </div>
                        <div class="sign">
                            <img src="{{asset('images/sign.png')}}" alt="" />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
