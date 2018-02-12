<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>mat happ - we help math !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/skin-blue.css" rel="stylesheet">
    <!-- Le fav -->
    <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/889635161029189634/22UbZV_j.jpg">
    <!--[if lt IE 9]>
    <style>
        nav, .container, header#top-section, .carousel, .demobutton {
            display: none;
        }
    </style>
    <div id='browserWarning'>
        You are using an outdated version of Internet Explorer. Please, switch to
        <a style="color:red;" href='http://getfirefox.com'>Firefox</a>,
        <a style="color:red;" href='http://www.google.de/chrome'>Google Chrome</a>
        ,
        <a style="color:red;" href='http://www.apple.com/safari/'>Safari</a>
        or the latest version of
        <a style="color:red;" href='http://windows.microsoft.com/en-US/internet-explorer/downloads/ie'>Internet
            Explorer</a>
        for a
        <span class='bold'>better</span>
        and
        <span class='bold'>safer</span>
        experience.
    </div>
    <script>
        window.Laravel = {{ json_encode([
            'csrfToken' => csrf_token(),
        ]) }}
    </script>
    <![endif]-->
</head>
<!-- /head-->
<body data-spy="scroll" data-target=".navbar">
<nav id="topnav" class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#top-section">{{ config('app.name') }}</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ route('home') }}#top-section">Home</a></li>
                <li><a href="{{ route('home') }}#Section-1">Features</a></li>
                <li><a href="{{ route('home') }}#Section-2">services</a></li>
                <li><a href="{{ route('home') }}#Section-3">help !</a></li>
                <li><a href="{{ route('home') }}#Section-4">Team</a></li>
                {{--<li><a href="#Section-5">Pricing</a></li>--}}
                {{--<li><a href="{{ route('home') }}#Section-6">Contact</a></li>--}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>

@yield('content')

<!-- FOOTER -->
<footer id="foot-sec">
    <div class="footerdivide">
    </div>
    <div class="container ">
        <div class="row">
            <div class="text-center color-white col-sm-12 col-lg-12">
                <ul class="social-icons">
                    <li><a href="facebook.com/alastro-moody"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/mamad_official"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/alastor-moody-206932159/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="m.r.kh.d.1381@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <p>
                    © math helper | all rights reserved
                </p>

            </div>
        </div>
    </div>
</footer>
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.placeholder.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/toucheffects.js"></script>
<script src="assets/js/animations.js"></script>
<script src="assets/js/init.js"></script>
</body>
</html>