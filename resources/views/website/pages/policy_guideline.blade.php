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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>


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
                <div style="margin-top: 30px;" class="col-md-3 col-sm-12">
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

                    <div class="container mt-5" id="exampleTable">
                        <input class="search form-control" placeholder="Search" />
                        <table class="table table-striped table-bordered mt-3">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <tr>
                                <td class="title">Example 1</td>
                                <td class="date">2023-04-18</td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="pagination"></ul>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <script>
        var options = {
            valueNames: ['title', 'download'],
            page: 5,
            pagination: true,
        };

        var userList = new List('exampleTable', options);
    </script>

@endsection
