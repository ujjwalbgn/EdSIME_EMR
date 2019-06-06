<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>@yield('pageTitle')</title>
{{--Google Analytics--}}
@includeIf('helpers.googleAnalytics', [env('APP_ENV') => 'production'])

<!-- Loading Bootstrap -->
    <link href={{asset("css/bootstrap.css")}} rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href={{asset("css/style.css")}} rel="stylesheet">
    <link href={{asset("css/style-magnific-popup.css")}} rel="stylesheet">
    <!-- Loading Custmom Template CSS -->
    <link href={{asset("css/custom.css")}} rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600,700" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href={{asset("css/pe-icon-7-stroke.css")}}>

    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href={{asset("css/helper.css")}}>

    <link rel="stylesheet" href={{asset("css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.theme.default.min.css")}}>

    <!-- Font Favicon -->
    <link rel="shortcut icon" href={{asset("images/favicon.ico")}}>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src={{asset("js/html5shiv.js")}}></script>
    <script src={{asset("js/respond.min.js")}}></script>
    <![endif]-->

    <!--headerIncludes-->

</head>

<body>

<!--begin header -->
<header class="header">

    <!--begin nav -->
    <nav class="navbar navbar-default navbar-fixed-top nav-section">

        <!--begin container -->
        <div class="container">

            <!--begin navbar -->
            <div class="navbar-header">

                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--logo -->
                <a href="/" class="navbar-brand" id="logo">EdSime</a>

            </div>

            <div id="navbar-collapse-02" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @yield('menu')
                </ul>
            </div>
            <!--end navbar -->

        </div>
        <!--end container -->

    </nav>
    <!--end nav -->

</header>
<!--end header -->

@yield('content')


<!--begin footer -->
<div class="footer">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <div class="col-md-4">
                <p>
                    <strong>Disclaimer:</strong><br>
                    EdSime is a Medication Administration Record Simulator and is not for real-life application
                </p>
            </div>
            <div class="col-md-4">
                <p><strong>Product</strong></p>
                <ul class="text-color">
                    <li><a href="#">eMAR Simulator</a></li>
                    <li><a href="#">EMR Simulator - Coming Soon</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><strong>Information</strong></p>
                <ul class="text-color">
                    <li><a href="/login">Login</a></li>
                    <li><a href="/systemRequirement">System Requirement</a></li>
                    <li><a href="/termOfUse">Terms of Use</a></li>
                    <li><a href="/dataPolicy">Data Policy</a></li>
                </ul>

            </div>


        </div>
        <!--end row -->
        <!--begin row -->
        <div class="row">
            <!--begin container -->
            <div class="col-md-12 text-center">
                <p>Copyright © 2019 CodeVelo LLC</p>
            </div>
            <!--end container -->
        </div>
        <!-- end row -->
    </div>
    <!--end container -->

</div>
<!--end footer -->


<script src={{asset("js/jquery-1.11.3.min.js")}}></script>
<script src={{asset("js/bootstrap.js")}}></script>
<script src={{asset("js/owl.carousel.min.js")}}></script>
<script src={{asset("js/jquery.scrollTo-min.js")}}></script>
<script src={{asset("js/jquery.magnific-popup.min.js")}}></script>
<script src={{asset("js/jquery.nav.js")}}></script>
<script src={{asset("js/plugins.js")}}></script>
<script src={{asset("js/custom.js")}}></script>


</body>
</html>
