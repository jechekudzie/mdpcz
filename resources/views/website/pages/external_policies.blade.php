<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:47 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    External Policies
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>External Polices</h1>
            <div style="display:none" class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; External Polices
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div style="margin-top: 30px;" class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">POLICIES AND GUIDELINES</div>
                        <!-- List group -->
                        <ul class="list-group">

                            <li class="list-group-item"><a href="{{url('/policy_guideline')}}">Internal Policies</a></li>
                            <li class="list-group-item"><a href="{{url('/external_policy')}}">External Policies</a></li>
                            <li class="list-group-item"><a href="{{url('/act')}}">MDPCZ GOVERNING LEGISLATION</a></li>

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
                <div style="margin-top: 30px;" class="col-md-9 col-sm-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">External Policy</th>
                            <th scope="col">Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($external_policies as $external_policy)
                            <tr>
                                <td>{{$external_policy->title}}</td>
                                <td><a href="{{asset($external_policy->file)}}" target="_blank">View/Download</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection
