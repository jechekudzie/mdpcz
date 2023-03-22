<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:47 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Policies and Guidelines
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Policies and Guidelines</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Policies and Guidelines
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Policy / Guideline</th>
                        <th scope="col">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($policy_guidelines as $policy_guideline)
                        <tr>
                            <th scope="row">{{$policy_guideline->id}}</th>
                            <td>{{$policy_guideline->title}}</td>
                            <td><a href="{{asset($policy_guideline->file)}}" target="_blank">View/Download</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
