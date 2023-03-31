<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/4/2023
 * Time: 5:08 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Registration Pathway
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Registration Pathway</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Registration Pathway
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">REGISTRATION</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{url('/registration-pathway')}}">Registration
                                    Pathway</a></li>
                            <li class="list-group-item"><a href="{{url('/registration-forms')}}">Registration Forms</a>
                            </li>
                            <li class="list-group-item"><a href="{{url('/banking-details')}}">Banking Details</a></li>
                            <li class="list-group-item"><a
                                    href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php">Registered
                                    Doctors</a></li>

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
                <div class="col-md-9 col-sm-12">
                    <div class="about-text">
                        <h4>Designated Health Institutions(DHIs)</h4>
                        <ul>
                            <li style="padding: 5px"><a href=""> Government Health Institutions</a></li>
                            <li style="padding: 5px"><a href=""> Mission Hospitals</a></li>
                            <li style="padding: 5px"><a href=""> City Heath Centres</a></li>
                            <li style="padding: 5px"><a href=""> And any approved  DHI by  the Council</a></li>
                        </ul>
                        <table style="padding-top: 10px" class="table table-bordered">
                            <tr>
                                <td>Registration Pathway</td>
                                <td>
                                    <a class="btn btn-primary" href="{{asset($registration_pathway->file)}}"
                                       target="_blank">View/Download</a>
                                </td>
                            </tr>

                        </table>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection
