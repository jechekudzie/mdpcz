<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 2:01 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Council Members
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Council Members</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Council Members
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->
    <div class="team sec-padd">
        <div class="container">

            <div class="row">
                <article class="col-md-3 col-sm-6 col-xs-12 m-b">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/kambarami-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Rose Agatha Kambarami</h5></a>
                                <p>Chairperson of Council</p>
                            </div>
                        </div>
                    </div>

                </article>
                <article class="col-md-3 col-sm-6 col-xs-12 m-b">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/Bungu-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Zindoga Tiz Johnson Bungu</h5></a>
                                <p>Vice Chairperson of Council</p>
                            </div>
                        </div>
                    </div>

                </article>
                <article class="col-md-3 col-sm-6 col-xs-12 m-b">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/4.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Tendai Chris Maboreke</h5></a>
                                <p>Chairperson - Audit Committee</p>
                            </div>
                        </div>
                    </div>

                </article>
                <article class="col-md-3 col-sm-6 col-xs-12 m-b">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/Ndovu-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Mbongeni Ndlovu</h5></a>
                                <p>Chairperson - Business and Finance</p>
                            </div>
                        </div>
                    </div>

                </article>

                <article class="col-md-3 col-sm-6 col-xs-12 ">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/masinire-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Kudzai Masinire</h5></a>
                                <p>Chairperson – Health Committee</p>
                            </div>
                        </div>
                    </div>

                </article>



                <article class="col-md-3 col-sm-6 col-xs-12 ">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/chirenda.png')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Joconiah Chirenda</h5></a>
                                <p>Chairperson - Research and Development Committee</p>
                            </div>
                        </div>
                    </div>
                </article>



                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/4.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Coming Hove</h5></a>
                                <p>Chairperson – Preliminary Inquiries Committee</p>
                            </div>
                        </div>
                    </div>

                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/maunganidze-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Aspect J V Maunganidze</h5></a>
                                <p>Chairperson – Education & Liaison Committee</p>
                            </div>
                        </div>
                    </div>

                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/Benyure-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Colin Benyure</h5></a>
                                <p>Council Member - Zimbabwe Anaesthetic Association</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/Chiware-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Misheck Chiware</h5></a>
                                <p>Council Member - Zimbabwe Society of Obstetricians & Gynaecologist</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/Chingwena-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Advance Chingwena</h5></a>
                                <p>Council Member - Zimbabwe Dental Association</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/katsidzira-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Agnes Katsidzira</h5></a>
                                <p>Council Member - College of Primary Care Physicians</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/Migan-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Massimo Migani</h5></a>
                                <p>Council Member - Zimbabwe Association for Church Related Hospitals</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/mudavanhu-240x250.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Justice Mudavanhu</h5></a>
                                <p>Council Member - Ministry of Health Representative</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/4.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Fiona Makoni</h5></a>
                                <p>Council Member - UZ College of Health Sciences</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/dube.png')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Israel Dube</h5></a>
                                <p>Council Member- Ministry of Health Representative</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item ">
                        <div class="team-member">
                            <figure class="img-box">
                                <a href="#"><img src="{{asset('images/team/4.jpg')}}" alt="team member photo"></a>
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <a href="#"><h5>Dr Thulani Leslie Magwali</h5></a>
                                <p>Council Member - University Representatives</p>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>

@endsection
