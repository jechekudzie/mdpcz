<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:16 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Registration Forms
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

<!-- custom Css-->
@section('site_content')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Application forms for registration’</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Application forms for registration’
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div class="container">

        <div class="my-code-block">
            <div class="row">
                <div class="col-sm-3">
                    <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                        @foreach($forms_categories as $forms_category)
                            <li class="@if($forms_category->id == 1){{'active'}}@endif">
                                <a href="#vtab{{$forms_category->id}}" data-toggle="tab">{{$forms_category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="tab-content">
                        @foreach($forms_categories as $forms_category)
                            <div role="tabpanel" class="tab-pane fade in @if($forms_category->id == 1){{'active'}}@endif" id="vtab{{$forms_category->id}}">
                                <h3>{{$forms_category->name}}</h3>
                                <div style="padding: 15px;" class="row">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Form</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($forms_category->forms as $form)
                                            <tr>
                                                <td>{{$form->title}}</td>
                                                <td><a href="{{asset($form->file)}}" target="_blank">View/Download</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="row">
             <div class="col-sm-3">
                 <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                     @foreach($forms_categories as $forms_category)

                         <li class="@if($forms_category->id == 1){{'active'}}@endif">
                             <a href="#vtab{{$forms_category->id}}" data-toggle="tab">{{$forms_category->name}}</a>
                         </li>

                     @endforeach
                 </ul>
             </div>
             <div class="col-sm-9">
                 <div class="tab-content">
                     @foreach($forms_categories as $forms_category)

                         <div role="tabpanel" class="tab-pane fade in @if($forms_category->id == 1){{'active'}}@endif"
                              id="vtab{{$forms_category->id}}">
                             <h3>{{$forms_category->name}}</h3>

                         </div>

                     @endforeach

                 </div>
             </div>
         </div>--}}

    </div>




@endsection
