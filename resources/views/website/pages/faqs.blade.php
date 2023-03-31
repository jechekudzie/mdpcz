<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 12:59 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    FAQs
@endsection
<style>
    .my-code-block {
        padding: 20px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .my-code-block h3 {
        margin-top: 20px;
        font-weight: bold;
    }

</style>

@section('site_content')
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Frequently asked questions</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; FAQ's
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <!--Start faq content area-->
    <div class="faq-content-area">
        <div class="container">

            <div sty class="my-code-block">
                <div class="row">
                    <div class="col-sm-3">
                        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                            @foreach($faq_categories as $faq_category)
                                <li class="@if($faq_category->id == 1){{'active'}}@endif">
                                    <a href="#vtab{{$faq_category->id}}" data-toggle="tab">{{$faq_category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content">
                            @foreach($faq_categories as $faq_category)
                                <div role="tabpanel"
                                     class="tab-pane fade in @if($faq_category->id == 1){{'active'}}@endif"
                                     id="vtab{{$faq_category->id}}">
                                    <h3>{{$faq_category->name}}</h3>
                                    <div style="padding-top: 5px;" class="accordion-box">
                                    @foreach($faq_category->faqs as $faq)
                                        <!--Start single accordion box-->
                                            <div class="accordion accordion-block">
                                                <div class="accord-btn" style="background-color: lightgrey;">
                                                    <h5 style="color: black;font-weight: bold;text-transform: uppercase">{{$faq->question}}</h5>
                                                </div>
                                                <div style="color: black;" class="accord-content">
                                                    {!! $faq->answer !!}
                                                </div>
                                            </div>
                                            <!--End single accordion box-->
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End faq content area-->
@endsection
