<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 11:02 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Council Examination
@endsection

@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Council Examination</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Council Examination
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div style="margin-top: 30px;" class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">EDUCATION</div>
                        <!-- List group -->
                        <ul class="list-group">

                            <li class="list-group-item"><a href="{{url('/council_examination')}}">Council
                                    Examination</a></li>
                            <li class="list-group-item"><a href="{{url('/fitness_to_practice')}}">Fitness to
                                    Practice</a></li>
                            <li class="list-group-item"><a href="{{url('/training_institution')}}">Accreditation</a>
                            </li>
                            <li class="list-group-item"><a href="{{url('/log_book')}}">Log Books</a></li>
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

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="{{asset('exam-pic-blended.jpeg')}}">
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <p>Please be advised that Council will be conducting registration examinations for foreign
                                trained medical and dental applicants on the following date and time:</p>
                        </div>
                    </div>
                    <div style="padding-top: 30px">
                        <table class="table table-bordered">
                            <tr>
                                <th>Period</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Venue</th>

                            </tr>
                            @foreach($exam_dates as $exam_date)
                                <tr>
                                    <td>{{$exam_date->period}}</td>
                                    <td>{{$exam_date->date}}</td>
                                    <td>{{$exam_date->time}}</td>
                                    <td>{{$exam_date->venue}}</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                    <div style="padding-top: 30px">
                        @foreach($exams as $exam)
                            <div style="padding-top: 20px">
                                {!! $exam->description !!}
                            </div>
                        @endforeach
                    </div>

                    <div style="padding-top: 30px">
                        <h4>Please refer to: </h4>
                        <hr/>
                        <ul>
                            @foreach($exam_guidelines as $exam_guideline)
                                <li><a href="{{asset($exam_guideline->file)}}"
                                       target="_blank">{{$exam_guideline->title}}</a></li>
                            @endforeach
                        </ul>
                        <hr/>
                    </div>
                    <div style="padding-top: 30px">
                        <h4>For any further clarification, please contact Council:</h4>
                        <p style="color: black;">
                            <br/>
                            Julian Mashingaidze
                            <br/>
                            <br/>
                            Cell: 263 712 879 646
                            <br/>
                            <br/>
                            Email: julian@mdpcz.co.zw
                        </p>
                    </div>

                </div>


            </div>
        </div>
    </div>





@endsection
