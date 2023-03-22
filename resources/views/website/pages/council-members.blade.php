<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 2:01 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Council Members
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Council Members</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Council Members
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div class="team sec-padd">
        <div class="container">

            <div class="row">
                @foreach($council_members as $council_member)
                    <article style="padding-bottom: 10px" class="col-md-3 col-sm-6 col-xs-12 m-b">
                        <div class="item ">
                            <div class="team-member">
                                <figure class="img-box">
                                    <a href="#"><img src="{{asset($council_member->file)}}"
                                                     alt="team member photo"></a>
                                    <div class="overlay">
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="member-info">
                                    <a href="#"><h5>{{$council_member->name}}</h5></a>
                                    <p>{{$council_member->title}}</p>
                                </div>
                            </div>
                        </div>

                    </article>
                @endforeach

            </div>
        </div>
    </div>

@endsection
