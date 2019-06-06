{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Nunito', sans-serif;--}}
                {{--font-weight: 200;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 13px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--EdSIME--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}

    @extends('frontendLayout.main')
@section('pageTitle', 'EdSime Welcome')
@section('menu')
    @include('frontendLayout.homeMenu')
@endsection
@section('content')
    <!--begin home section -->
    <section class="home-section" id="home_wrapper">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6 padding-top-50">

                    <h1>Welcome To EdSime</h1>

                    <p>Bring eMAR to Simulation<br>EdSime is a cloudbased eMAR Simulation Application</p>

                    <a href="#about" class="btn-white-border scrool">Explore More</a>

                    <a href="#contact" class="btn-white scrool">Request a Demo</a>

                </div>
                <div class="col-md-5">

                    <img src={{asset("img/edsime_hero.png")}} class="width-40" alt="image">
                </div>
                <!--end col-md-6-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end home section -->

    <!--begin section-grey -->
    <section class="section-grey" id="about">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">

                    <h2 class="section-title">How It Works</h2>

                    <p class="section-subtitle">EdSime's eMAR is a Cloud based Electronic Medication Administration Record Simulator<br></p>

                </div>
                <!--end col-md-12 -->

                <!--begin col-md-4 -->
                <div class="col-md-4">

                    <div class="main-services">

                        <img src={{asset("img/edsime_user_friendly_interface.png")}} class="width-100" alt="pic">

                        <h3>User Friendly</h3>

                        <p>The EdSime's eMAR is simple to setup and easy to use</p>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4">

                    <div class="main-services">

                        <img src={{asset("img/edsime_cloud_ui.png")}} class="width-100" alt="pic">

                        <h3>Cloud Base & Responsive Design</h3>

                        <p>Our eMAR is Cloud Based and doesn't require inhouse servers. All you need is laptop or tablet.</p>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4">

                    <div class="main-services">

                        <img src="img/edsime_integration.png" class="width-100" alt="pic">

                        <h3>Easy Integration</h3>

                        <p>Integrated with existing Medication Dispinsing Systems</p>

                    </div>

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section-grey -->

    <!--begin section-white -->
    <section class="section-white">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6">
                    <img class="img-res" src={{asset("svg/edsime_nurse.svg")}} alt="pic">
                </div>
                <!--end col-sm-6-->

                <!--begin col-md-6-->
                <div class="col-md-6 padding-top-10">

                    <h3>EdSime is robust Simulation software designed for Higher Ed, Hospital and Clinical settings.</h3>

                    <p>EdSime's eMAR is a cloud based platform to simulate Patient Record to replicate clinical practices in a safe environment.</p>

                    <!--begin features-list-hero -->
                    <ul class="features-list-hero">

                        <li>
                            <i class="pe-7s-plane hi-icon blue"></i>
                            EdSime's eMAR required a computing device with internet connection and does not required any servers or installations.
                        </li>

                        <li>
                            <i class="pe-7s-umbrella hi-icon red"></i>
                            The platform and doesn't store real patients information, you don't need to worry about Information Security and Privacy.
                        </li>

                        <li>
                            <i class="pe-7s-like hi-icon green"></i>
                            Our User Interface is simple and easy to navigate. We are sure you will love the simplicity.
                        </li>


                    </ul>
                    <!--end features-list-hero -->

                </div>
                <!--end col-md-6-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-white-->

    <!--begin faq section -->
    <section class="section-grey" id="faq">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-10">

                    <!--begin panel-group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <!--begin panel-default -->
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingOne">

                                <h4 class="panel-title">

                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="icon icon-rocket panel-icon"></i> What's the difference between eMAR vs. EdSime's eMAR Simulator ?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                                <div class="panel-body">
                                    <p>Regular eMAR are time based and in many cases will have real patients information. This means the medication records need to be logged in real time. <strong>EdSime's eMAR</strong> is build for simulation use as it doesn't have timing restrictions.</p>
                                </div>

                            </div>

                        </div>
                        <!--end panel-default -->

                        <!--begin panel-default -->
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingTwo">

                                <h4 class="panel-title">

                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="icon icon-prize-award panel-icon"></i> What's the system requirement to use EdSime's eMAR Simulator?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

                                <div class="panel-body">
                                    <p>EdSime's eMAR can work on Computers, Tablets and Mobile devices. The latest version of Firefox or Google Chrome Browser is recommended.</p>
                                    <a class="btn-outline-light" href="/systemRequirement">Read More</a>
                                </div>

                            </div>

                        </div>
                        <!--end panel-default -->

                        <!--begin panel-default -->
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingThree">

                                <h4 class="panel-title">

                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="icon icon-present-gift panel-icon"></i> Can EDSime's eMAR Simulator be integrated with pre-existing systems?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

                                <div class="panel-body">
                                    <p>EdSime's Barcode Technology can easily integrated with preexisting systems and medications records. The simulator can be integrated with existing Automated Dispensing Cabinets but assigning same barcode to the records.</p>
                                </div>

                            </div>

                        </div>
                        <!--end panel-default -->

                    </div>
                    <!--end panel-group -->

                </div>

                <!--end col-sm-6-->

                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-10">

                    <img src={{asset("img/edsime_hospital.png")}} class="img-res" alt="image">

                </div>
                <!--end col-sm-6-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end faq section -->

    <!--begin services section -->
    <section class="section-white small-padding-top" id="features">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title">Features</h2>

                    <p class="section-subtitle">EdSime is designed to work both as a stand alone system and can be integrated with Medication Dispinsing Systems</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12">

                    <div class="feature-box light-green">

                        <i class="pe-7s-tools"></i>

                        <div class="feature-box-text">

                            <h4>No Installation Required </h4>

                            <p>All you need is a computer, barcode scanner and internet. Just got Simpler.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-12 -->

                <!--begin col-md-12-->
                <div class="col-md-12">

                    <div class="feature-box light-blue">

                        <i class="pe-7s-users"></i>

                        <div class="feature-box-text">

                            <h4>User Friendly</h4>

                            <p>The Simulator comes with simple User Interface and is easy to navigate.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-12 -->

                <!--begin col-md 12-->
                <div class="col-md-12">

                    <div class="feature-box light-red">

                        <i class="pe-7s-piggy"></i>

                        <div class="feature-box-text">

                            <h4>Low Cost of Operation</h4>

                            <p>The cost of operation is low as no insite server or other high end equipments are not needed.</p>

                        </div>

                    </div>
                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end services section -->

    <!--begin contact -->
    @include('frontend.contactUs')
    <!--end contact-->
@endsection
