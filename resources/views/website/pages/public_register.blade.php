<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 10:47 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Public register
@endsection

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Nunito';
    }
</style>

@livewireStyles
@section('site_content')
    <!--Start breadcrumb area-->
    <div {{--class="breadcrumb-area" style="background-color: #0195DB;"--}}>
        <div class="container text-center">
            <h1 style="padding-top:30px;">Public Register</h1>
            <div style="display:none" class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Public Register
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div style="padding:5%;" class="about-us sec-padd-top">
        <div class="container-fluid">
            @livewire('public-register')
        </div>
    </div>




@endsection
@livewireScripts
