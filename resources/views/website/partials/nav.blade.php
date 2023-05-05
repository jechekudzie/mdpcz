<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 12:33 PM
 */ ?>

<!--Start Top bar area -->
<div style="background-color: #eff8fd;" class="top-bar-area">
    <div class="container">
        <div class="clearfix">
            <div class="pull-left"><p style="color: #3A25AC;font-weight: bold;">Promoting the health of the population
                    of Zimbabwe through guiding the Medical and Dental Professions...</p></div>
            <div class="pull-right">
                <p style="color: #3A25AC;font-weight: bold;"><i class="fa fa-clock-o"></i>Mon - Fri 8.00 - 16.00;
                    Weekends and Public holidays CLOSED</p>
            </div>
        </div>

    </div>
</div>
<!--End Top bar area -->

<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
                <div style="padding-top:55px;" class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('images/mdpcz.png')}}" alt="Logo" width="800">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            {{--<div class="iocn-holder">
                                <span class="fa fa-info-circle"></span>
                            </div>--}}
                            <div class="text-holder">
                                <h6>8 Harvey Brown</h6>
                                <p>Milton Park </p><br/>
                                <p>Harare, Zimbabwe </p> <br>
                                <p>Land: 263-242-790144, 263-242-793707</p>
                            </div>
                        </li>
                        <li>
                            {{--<div class="iocn-holder">
                                <span class="fa fa-info-circle"></span>
                            </div>--}}
                            <div class="text-holder">
                                <h6>No 2 Robertson Street</h6>
                                <p>Parkview</p> <br>
                                <p>Bulawayo, Zimbabwe <br>
                                </p><br/>
                                <p>Land: 263 9 72237/38 </p>
                            </div>
                        </li>
                        <li>
                            {{--<div class="iocn-holder">
                                <span class="fa fa-info-circle"></span>
                            </div>--}}
                            <div class="text-holder mail-holder">
                                <h6>Contact Us</h6>
                                <p>mdpcz@mdpcz.co.zw</p><br/>
                                <p>WhatsApp: 263 712544066</p><br/>
                                <p style="margin-top:2px;">
                                    <a href="https://www.facebook.com/mdpcz2019" target="_blank">Facebook: <i
                                            class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
                                    <a href="https://twitter.com/MDPCZ2" target="_blank">Twitter <i
                                            class="fa fa-twitter"></i></a>
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<div class="mainmenu-area stricky">
    <div style="margin-left:10%;margin-right:2%;" class="container-fluid">
        <div class="mainmenu-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class=""><a href="{{url('/')}}">
                                        Home</a></li>
                                <li><a href="#">About us</a>
                                    <ul>
                                        <li><a href="{{url('/registrar')}}">Registrar</a></li>
                                        <li><a href="{{url('/who_we_are')}}">Who We Are</a></li>
                                        <li><a href="{{url('/what_we_do')}}">What We Do</a></li>
                                        <li><a href="{{url('/our_history')}}">Our History</a></li>
                                        <li><a href="{{url('/council_structure')}}">Council Structure</a></li>
                                        <li><a href="{{url('/council_member')}}">Council Members</a></li>
                                        <li><a href="{{url('/committees')}}">Committees</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Registration</a>
                                    <ul>
                                        <li><a href="{{url(\App\Models\RegistrationPathWay::find(1)->file)}}" target="_blank">Registration Pathway</a></li>
                                        <li><a href="{{url('/registration_forms')}}">Application forms for registration</a></li>
                                        <li><a href="{{url('/public_register')}}" target="_blank">Public Register</a></li>
                                        <li><a href="{{url('/designated_institution')}}">DHI</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{url('/public_register')}}" target="_blank">Public Register</a></li>

                                <li><a href="#">Education</a>
                                    <ul>

                                        {{--<li><a href="{{url('/council_examination')}}">Education and Training</a></li>--}}
                                        <li><a href="{{url('/council_examination')}}">Council Registration Assessment</a></li>
                                        <li><a href="{{url('/training_institution')}}">Medical / Dental Training Institutions </a></li>
                                        <li><a href="{{url('/internship_institution')}}">Intern / Specialist Teaching Units</a></li>
                                        <li><a href="{{asset('cpd_form_.pdf')}}" target="_blank">CPD Application Form</a></li>

                                    </ul>
                                </li>

                                <li><a href="#">The Public</a>
                                    <ul>
                                        <li><a href="{{url('/complaint')}}">Complaints</a></li>
                                        <li><a href="{{url('/our_resource')}}">Resources</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Policies & Guidelines</a>
                                    <ul>
                                        {{--<li><a href="{{url('/council_examination')}}">Education and Training</a></li>--}}
                                        <li><a href="{{url('/policy_guideline')}}">Internal</a></li>
                                        <li><a href="{{url('/external_policy')}}">External</a></li>
                                        <li><a href="{{url('/act')}}">MDPCZ Governing Legislation</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{url('/faqs')}}">FAQ's</a></li>
                                <li><a href="{{url('/contact_us')}}">Contact Us</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                    <!-- mobile-menu -->
                    <div class="services-mobile-menu visible-xs">
                        <nav id="mobile-nav">
                            <ul>
                                <li class="active"><a href="{{url('/')}}">
                                        Home</a></li>
                                <li><a href="#">About us</a>
                                    <ul>
                                        <li><a href="{{url('/registrar')}}">Registrar</a></li>
                                        <li><a href="{{url('/who_we_are')}}">Who We Are</a></li>
                                        <li><a href="{{url('/what_we_do')}}">What We Do</a></li>
                                        <li><a href="{{url('/our_history')}}">Our History</a></li>
                                        <li><a href="{{url('/council_structure')}}">Council Structure</a></li>
                                        <li><a href="{{url('/council_member')}}">Council Members</a></li>
                                        <li><a href="{{url('/committees')}}">Committees</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Registration</a>
                                    <ul>
                                        <li><a href="{{url(\App\Models\RegistrationPathWay::find(1)->file)}}" target="_blank">Registration Pathway</a></li>
                                        <li><a href="{{url('/registration_forms')}}">Application forms for registration</a></li>
                                        <li class=""><a href="{{url('/designated_institution')}}">DHI</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/public_register')}}" target="_blank">Public Register</a></li>
                                <li><a href="#">Education</a>
                                    <ul>
                                        {{--<li><a href="{{url('/council_examination')}}">Education and Training</a></li>--}}
                                        <li><a href="{{url('/council_examination')}}">Council Registration Assessment</a></li>
                                        <li><a href="{{url('/training_institution')}}">Medical / Dental Training Institutions </a></li>
                                        <li><a href="{{url('/internship_institution')}}">Intern / Specialist Teaching Units</a></li>
                                        <li><a href="{{asset('cpd_form_.pdf')}}" target="_blank">CPD Application Form</a></li>


                                    </ul>
                                </li>

                                <li><a href="#">The Public</a>
                                    <ul>
                                        <li><a href="{{url('/complaint')}}">Complaints</a></li>
                                        <li><a href="{{url('/our_resource')}}">Resources</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Policies & Guidelines</a>
                                    <ul>
                                        {{--<li><a href="{{url('/council_examination')}}">Education and Training</a></li>--}}
                                        <li><a href="{{url('/policy_guideline')}}">Internal</a></li>
                                        <li><a href="{{url('/external_policy')}}">External</a></li>
                                        <li><a href="{{url('/act')}}">MDPCZ Governing Legislation</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{url('/faqs')}}">FAQ's</a></li>
                                <li><a href="{{url('/contact_us')}}">Contact Us</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            {{--  <div style="margin-left:2%;" class="right-column">
                  <div class="right-area">
                      <div class="nav_side_content">
                          <div class="search_option">
                              <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                      class="fa fa-search" aria-hidden="true"></i></button>
                              <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                  <input type="text" placeholder="Search...">
                                  <button><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>
                          </div>

                      </div>

                  </div>
              </div>--}}
        </div>
    </div>
</div>
