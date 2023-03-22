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
                <div class="col-md-7 col-sm-12">
                    <div class="about-text">
                        <h2>
                            Council <span class="thm-color"> Examinations </span>
                        </h2>
                        <div style="padding-top: 1px;" class="accordion-box">
                        @foreach($exams as $exam)
                            <!--Start single accordion box-->
                                <div class="accordion accordion-block">
                                    <div class="accord-btn active"><h1
                                            style="color: white;">{{$exam->title}}</h1></div>
                                    <div class="accord-content collapsed">
                                        {!! $exam->description !!}
                                    </div>
                                </div>
                                <!--End single accordion box-->
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="about-text">
                        <h2>
                            Examination <span class="thm-color"> Guidelines </span>
                        </h2>
                        <div class="text">
                            <p style="color: black;">Please refer to:</p>
                            <ul>
                                @foreach($exam_guidelines as $exam_guideline)
                                    <li style="padding: 10px;"><a href="{{asset($exam_guideline->file)}}"
                                                                  target="_blank">{{$exam_guideline->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
                <p style="color: black;">
                    For any further clarification, please contact Council:
                    <br/>
                    Julian Mashingaidze
                    <br/>
                    Cell: 263 712 879 646
                    <br/>
                    Email: julian@mdpcz.co.zw
                </p>

            </div>
        </div>
    </div>





@endsection
