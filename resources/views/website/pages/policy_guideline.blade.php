<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:47 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Internal Policies and Guidelines
@endsection


@section('site_content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>


    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Internal Policies and Guidelines</h1>

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

                            <li class="list-group-item"><a href="{{url('/policy_guideline')}}">Internal Policies</a>
                            </li>
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
                <div style="margin-top: 30px;" class="col-md-8 col-sm-12">
                    @foreach($committees as $committee)
                        @if($committee->policy_guidelines->count() > 0)

                            <div class="container" id="exampleTable{{$committee->id}}">
                                <div class="row">
                                    <div class="col-md-10 col-sm-12">
                                        <h3>{{$committee->name}}</h3>

                                        <input style="margin-bottom:10px;" class="search form-control"
                                               placeholder="Search"/>
                                        <table class="table table-striped table-bordered {{--mt-3--}}">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Download</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list">
                                            @foreach($committee->policy_guidelines as $policy_guideline)
                                                <tr>
                                                    <td class="title">{{$policy_guideline->title}}</td>
                                                    <td class="date"><a href="{{asset($policy_guideline->file)}}"
                                                                        target="_blank">Download</a></td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                       {{-- <ul class="pagination"></ul>--}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                        <h2>Other Policies</h2>
                            <p style="padding-right:200px;" class="title">Medical Records Amendment</p>
                            <p class="date"><a href="{{asset('Medical records ammendment.pdf')}}"
                                                target="_blank">Download</a></p>

                </div>
            </div>

        </div>
    </div>
    @foreach($committees as $committee)
        @if($committee->policy_guidelines->count() > 0)
            <script>
                var options = {
                    valueNames: ['title', 'download'],
                    page: 10,
                    pagination: true,
                };

                var userList = new List('exampleTable{{$committee->id}}', options);
            </script>
        @endif
    @endforeach

@endsection
