<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 12/15/2022
 * Time: 1:32 PM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Our History
@endsection


@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Our History</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Our History
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="process-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="process-item text-center">
                        <div class="process-item-content">
                            <span class="process-item-number">1</span>
                            <h3 class="process-item-title">current</h3>
                            <h4>Chairman & Registrar </h4><br>
                            <p>Prof Rose Kambarami - Chairperson <br>
                                Mrs Josephine Mwakutuya - Registrar <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="process-item text-center highlight">
                        <div class="process-item-content">
                            <span class="process-item-number">2</span>
                            <h3 class="process-item-title">1940 – 2001</h3>
                            <h4> Past Registrars </h4><br>
                            <p>1 Mr W Buchaman 1940 1946 <br>
                                2 Mr LJN Hampton 1946 1949 <br>
                                3 Mr EE Philip 1949 1962 <br>
                                4 Mr WF Wayne 1962 1967 <br>
                                5 Mr CS Mitchell (acting) 1968 1968 <br>
                                6 Mr DH Whaley 1969 1978 <br>
                                7 Mr WA Tozer 1979 1981 <br>
                                8 Mr DG Bessant 1981 1997 <br>
                                9 Mr JM Mapisire 1998 2001 <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="process-item text-center">
                        <div class="process-item-content">
                            <span class="process-item-number">3</span>
                            <h3 class="process-item-title">1905 – 2000</h3>
                            <h4> Past Presidents </h4><br>
                            <p>1 Dr AM Fleming 1905 1930 <br>
                                2 Mr GM Huggins 1930 1933 <br>
                                3 Dr GH Peall 1933 1954 <br>
                                5 Mr Standish-White 1946 1952 <br>
                                6 Dr J Wakeford 1953 1972<br>
                                7 Dr W Fraser Ross 1973 1984 <br>
                                8 Dr LJ Binnie 1985 1990 <br>
                                9 Mr AC Harid 1990 2000 <br>
                                10 Dr GL Bango 2000 2005 <br>
                                11 Dr P.S Makurira 2005 2010 <br>
                                12 Prof IT Gangaidzo 2010 2015 <br>
                                13 Dr Adolf Macheka - 2015 -2020 <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
