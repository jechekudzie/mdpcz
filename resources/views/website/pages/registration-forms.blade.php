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


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Registration Forms</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Registration Forms
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div class="about-us sec-padd-top">
        <div class="container">
            <div class="row">

                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#student" id="nav-student-tab" aria-current="page" href="#student">Student</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#intern" id="nav-intern-tab" href="#intern">Intern</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#provisional" id="nav-provisional-tab" href="#provisional">Provisional</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#mainreg" id="nav-mainreg-tab" href="#mainreg">Main Register</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#specialist" id="nav-specialist-tab" href="#specialist">Specialist</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#certificates" id="nav-certificates-tab" href="#certificates">Certificates</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#transfer" id="nav-transfer-tab" href="#transfer">Transfer</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#cpd"  id="nav-cpd-tab" href="#cpd">CPD</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                        <table style="width: 620px; height: 92px;">
                            <tbody>
                            <tr style="height: 24px;">
                                <td style="width: 459.2px; height: 24px;"><span style="font-size: 12pt;"><strong><span style="font-family: times new roman,times,serif; color: #000080;"> Application as a local student</span></strong></span></td>
                                <td style="width: 144.8px; height: 24px;"><a href="https://www.mdpcz.co.zw/wp-content/uploads/2017/03/APPLICATION-AS-A-STUDENT.pdf" target="_blank" rel="noopener noreferrer">Download</a></td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 459.2px; height: 24px;"><span style="font-size: 12pt;"><strong><span style="font-family: times new roman,times,serif; color: #000080;"> Application as a Foreign student</span></strong></span></td>
                                <td style="width: 144.8px; height: 24px;"><a href="http://www.mdpcz.co.zw/wp-content/uploads/2018/03/APPLICATION-AS-A-STUDENT-FOREIGN.pdf">Download</a></td>
                            </tr>
                            <tr style="height: 24.1007px;">
                                <td style="width: 459.2px; height: 24.1007px;">&nbsp;<strong><span style="font-family: times new roman,times,serif; color: #000080;">Application as an Elective student</span></strong></td>
                                <td style="width: 144.8px; height: 24.1007px;"><a href="http://www.mdpcz.co.zw/wp-content/uploads/2018/11/APPLICATION-AS-AN-ELECTIVE-UNDERGRADUATE-STUDENT.doc">Download&nbsp;</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="intern" role="tabpanel" aria-labelledby="intern-tab">

                    </div>
                    <div class="tab-pane fade" id="provisional" role="tabpanel" aria-labelledby="provisional-tab">

                    </div>
                    <div class="tab-pane fade" id="mainreg" role="tabpanel" aria-labelledby="mainreg-tab">

                    </div>
                    <div class="tab-pane fade" id="specialist" role="tabpanel" aria-labelledby="specialist-tab">

                    </div>
                    <div class="tab-pane fade" id="certificates" role="tabpanel" aria-labelledby="certificates-tab">

                    </div>
                    <div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">

                    </div>
                    <div class="tab-pane fade" id="cpd" role="tabpanel" aria-labelledby="cpd-tab">

                    </div>
                </div>

            </div>

            <div class="row">

                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#student" id="nav-student-tab" aria-current="page" href="#student">CPD</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#intern" id="nav-intern-tab" href="#intern">Assessments/Reports</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#provisional" id="nav-provisional-tab" href="#provisional">Philantropic</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#mainreg" id="nav-mainreg-tab" href="#mainreg">Premises</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#specialist" id="nav-specialist-tab" href="#specialist">Log Books</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#certificates" id="nav-certificates-tab" href="#certificates">Others</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                        <table style="width: 620px; height: 92px;">
                            <tbody>
                            <tr style="height: 24px;">
                                <td style="width: 459.2px; height: 24px;"><span style="font-size: 12pt;"><strong><span style="font-family: times new roman,times,serif; color: #000080;"> Application as a local student</span></strong></span></td>
                                <td style="width: 144.8px; height: 24px;"><a href="https://www.mdpcz.co.zw/wp-content/uploads/2017/03/APPLICATION-AS-A-STUDENT.pdf" target="_blank" rel="noopener noreferrer">Download</a></td>
                            </tr>
                            <tr style="height: 24px;">
                                <td style="width: 459.2px; height: 24px;"><span style="font-size: 12pt;"><strong><span style="font-family: times new roman,times,serif; color: #000080;"> Application as a Foreign student</span></strong></span></td>
                                <td style="width: 144.8px; height: 24px;"><a href="http://www.mdpcz.co.zw/wp-content/uploads/2018/03/APPLICATION-AS-A-STUDENT-FOREIGN.pdf">Download</a></td>
                            </tr>
                            <tr style="height: 24.1007px;">
                                <td style="width: 459.2px; height: 24.1007px;">&nbsp;<strong><span style="font-family: times new roman,times,serif; color: #000080;">Application as an Elective student</span></strong></td>
                                <td style="width: 144.8px; height: 24.1007px;"><a href="http://www.mdpcz.co.zw/wp-content/uploads/2018/11/APPLICATION-AS-AN-ELECTIVE-UNDERGRADUATE-STUDENT.doc">Download&nbsp;</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="intern" role="tabpanel" aria-labelledby="intern-tab">

                    </div>
                    <div class="tab-pane fade" id="provisional" role="tabpanel" aria-labelledby="provisional-tab">

                    </div>
                    <div class="tab-pane fade" id="mainreg" role="tabpanel" aria-labelledby="mainreg-tab">

                    </div>
                    <div class="tab-pane fade" id="specialist" role="tabpanel" aria-labelledby="specialist-tab">

                    </div>
                    <div class="tab-pane fade" id="certificates" role="tabpanel" aria-labelledby="certificates-tab">

                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection
