<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:47 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Acts
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Acts</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Acts
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
                        <th scope="col">Act</th>
                        <th scope="col">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($acts as $act)
                        <tr>
                            <th scope="row">{{$act->id}}</th>
                            <td>{{$act->title}}</td>
                            <td><a href="{{asset($act->file)}}" target="_blank">View/Download</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
