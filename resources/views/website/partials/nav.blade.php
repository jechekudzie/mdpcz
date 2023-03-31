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
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('images/mdpcz.png')}}" alt="Logo" width="300">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>8 Harvey Brown</h6>
                                <p>Milton Park <br>
                                    Harare, Zimbabwe <br>
                                </p>
                                <p>Land: 263 (0)4-792195, </p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>No 2 Robertson Street</h6>
                                <p>Parkview <br>
                                    Bulawayo, Zimbabwe <br>
                                </p>
                                <p>Land: 263 9 72237/38</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-email-filled-closed-envelope"></span>
                            </div>
                            <div class="text-holder mail-holder">
                                <h6>Mail Us</h6>
                                <p>mdpcz@mdpcz.co.zw<br>
                                </p>
                            </div>
                        </li>
                        {{--<li>
                            <div class="link_btn float_right">
                                @if (Route::has('login'))
                                    <div>
                                        @auth
                                            <a href="{{ url('/home') }}" class="thm-btn bg-clr1">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="thm-btn bg-clr1">Log in /Register</a>
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<div class="mainmenu-area stricky">
    <div class="container">
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
                                        <li><a href="{{url('/what-we-do')}}">What We Do</a></li>
                                        <li><a href="{{url('/our-history')}}">Our History</a></li>
                                        <li><a href="{{url('/council-structure')}}">Council Structure</a></li>
                                        <li><a href="{{url('/council-members')}}">Council Members</a></li>
                                        <li><a href="{{url('/committees')}}">Committees</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Registration</a>
                                    <ul>
                                        <li><a href="{{url('/registration-pathway')}}">Registration Pathway</a></li>
                                        <li><a href="{{url('/registration-forms')}}">Registration Forms</a></li>
                                        <li><a href="{{url('/banking-details')}}">Banking Details</a></li>
                                        <li><a href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php"
                                               target="_blank">Registered Doctors</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">The Profession</a>
                                    <ul>
                                        <li><a href="{{url('/online-services')}}">Online Services</a></li>
                                        <li><a href="{{url('/registers')}}">Registers</a></li>
                                        <li><a href="{{url('/council-examination')}}">Council Examination</a></li>
                                        <li><a href="{{url('/fitness-to-practice')}}">Fitness to Practice</a></li>
                                        <li><a href="{{url('/policy_guideline')}}">Policies & Guidelines</a></li>
                                        <li><a href="{{url('/act')}}">Acts</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">The Public</a>
                                    <ul>
                                        <li><a href="{{url('/complaint')}}">Complaints</a></li>
                                        <li><a href="{{url('/our_resource')}}">Resources</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/policy_guideline')}}">Policies & Guidelines</a></li>
                                <li><a href="{{url('/faqs')}}">FAQ's</a></li>
                                <li><a href="{{url('/contact-us')}}">Contact Us</a></li>

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
                                        <li><a href="{{url('/what-we-do')}}">What We Do</a></li>
                                        <li><a href="{{url('/our-history')}}">Our History</a></li>
                                        <li><a href="{{url('/council-structure')}}">Council Structure</a></li>
                                        <li><a href="{{url('/council-members')}}">Council Members</a></li>
                                        <li><a href="{{url('/committees')}}">Committees</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Registration</a>
                                    <ul>
                                        <li><a href="{{url('/registration-pathway')}}">Registration Pathway</a></li>
                                        <li><a href="{{url('/registration-forms')}}">Registration Forms</a></li>
                                        <li><a href="{{url('/banking-details')}}">Banking Details</a></li>
                                        <li><a href="http://www.mdpcz.co.zw/mdpcz_find/_f/_find_practitioner.php">Registered
                                                Doctors</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">The Profession</a>
                                    <ul>
                                        <li><a href="{{url('/online-services')}}">Online Services</a></li>
                                        <li><a href="{{url('/registers')}}">Registers</a></li>
                                        <li><a href="{{url('/council-examination')}}">Council Examination</a></li>
                                        <li><a href="{{url('/fitness-to-practice')}}">Fitness to Practice</a></li>
                                        <li><a href="{{url('/policy_guideline')}}">Policies & Guidelines</a></li>
                                        <li><a href="{{url('/act')}}">Acts</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">The Public</a>
                                    <ul>
                                        <li><a href="{{url('/complaint')}}">Complaints</a></li>
                                        <li><a href="{{url('/our_resource')}}">Resources</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/policy_guideline')}}">Policies & Guidelines</a></li>
                                <li><a href="{{url('/faqs')}}">FAQ's</a></li>
                                <li><a href="{{url('/contact-us')}}">Contact Us</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="right-column">
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
            </div>
        </div>
    </div>
</div>
