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

            <style>
                /* Style the member div */
                .member {
                    text-align: center;
                    margin-bottom: 30px;
                    padding: 20px;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                    transition: all 0.3s ease-in-out;
                    background-color: #fff;
                }

                /* Hover effect for member div */
                .member:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
                }

                /* Style the name */
                .member h4 {
                    font-size: 20px;
                    font-weight: 600;
                    margin-top: 20px;
                    margin-bottom: 5px;
                }

                /* Style the position */
                .member p {
                    font-size: 12px;
                    color: black;
                    margin-bottom: 20px;

                }

                .member img {
                    width: 250px;
                    height: 250px;
                }
            </style>

            <div class="container">
                <div class="row">
                    @foreach($council_members as $council_member)
                    <div class="col-md-4">
                        <div class="member">
                            <img src="{{asset($council_member->file)}}" class="img-fluid rounded-circle" alt="Committee member 1">
                            <h4>{{$council_member->name}}</h4>
                            <p>{{$council_member->title}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
