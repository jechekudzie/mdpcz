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

    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <figure class="about-img">
                        <img src="{{asset('images/exam-pic-blended.jpeg')}}" alt="about photo">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <p>
                            Please be advised that Council will be conducting registration examinations for foreign trained medical and dental applicants on the following date and time:
                        </p>
                        <br>

                        <br>

                    </div>

                </div>
                <br><br><br>
                <div class="col-md-12">
                    <br>
                    <ol>
                        <li><strong>The Medical Papers will cover: </strong></li>
                    </ol>
                    <ul class="list-item">
                        <li>Paediatrics, Obstetrics &amp; Gynaecology, Medicine and Surgery</li>
                        <li>The questions are comprised of multiple-choice questions in Surgery and Obstetrics &amp; Gynaecology , single best answer in Medicine and Paediatrics.</li>
                        <li>The four papers will have 50 marks each and each paper will be one hour long.</li>
                        <li>Two papers are written in the morning and two papers in the afternoon</li>
                    </ul>
                    <br>
                    <ol start="2">
                        <li><strong> The </strong><strong>Dental Papers will cover-</strong></li>
                    </ol>
                    <ul class="list-item">
                        <li>Oral and Maxillofacial Surgery, Oral and Maxillofacial Pathology and Oral and Maxillofacial Radiology.</li>
                        <li>Restorative Dentistry and Endodontics –Prosthodontics.</li>
                        <li>Orthodontics and Paediatric Dentistry</li>
                        <li>Periodontics and Oral Medicine and Community Dentistry.</li>
                        <li>The four papers will have 50 marks each and each paper will be one hour long.</li>
                        <li>Two papers will be written in the morning and two in the afternoon.</li>
                    </ul>
                    <br>
                    <p>Please refer to:</p>
                    <ol>
                        <li> <a href="http://www.mdpcz.co.zw/wp-content/uploads/2018/10/EDLIZ.pdf">7th Essential Medicines List and Standard Treatment Guidelines for Zimbabwe </a></li>
                        <li><a href="http://www.mdpcz.co.zw/wp-content/uploads/2019/02/guidelines-for-registration-examination.docx">Guidelines for registration Exams </a></li>
                    </ol>
                    <br>
                    <p>For any further clarification, please contact Council:</p>
                    <p><strong>Julian Mashingaidze</strong></p>
                    <p>Cell: 263 712 879 646</p>
                    <p>Email: julian@mdpcz.co.zw</p>

                </div>
            </div>
        </div>
    </div>





@endsection
