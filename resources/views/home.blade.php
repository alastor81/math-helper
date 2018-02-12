@extends('index')
@section('content')
    <!-- HOMEPAGE -->
    <header id="top-section" class="fullbg">
        <div class="jumbotron">
            <div id="carousel_intro" class="carousel slide fadeing">
                <div class="carousel-inner">
                    <div class="active item" id="slide_1">
                        <div class="carousel-content">
                            <div class="animated fadeInDownBig">
                                <h1>see this app features.</h1>
                            </div>
                            <br/>
                            {{--<a href="#" class="buttonyellow animated fadeInLeftBig"><i class="fa fa-shopping-cart"></i>&nbsp; Get Theme</a>--}}
                            <a href="#Section-1" class="buttoncolor animated fadeInRightBig"><i class="fa fa-link"></i>&nbsp;
                                Start Tour</a>

                        </div>
                    </div>
                    <div class="item" id="slide_2">
                        <div class="carousel-content">
                            <div class="animated fadeInDownBig">
                                <h1>we can show you what can we do.</h1>
                            </div>
                            <br/>
                            <a href="#Section-2" class="buttoncolor animated fadeInRightBig"><i class="fa fa-link"></i>&nbsp;
                                Learn More</a>

                        </div>
                    </div>
                    <div class="item" id="slide_3">
                        <div class="carousel-content">
                            <div class="animated fadeInDownBig">
                                <h1>Have a Problem ? We help you !</h1>
                            </div>
                            <br/>
                            <a href="#Section-3" class="buttonyellow animated fadeInLeftBig"><i class="fa fa-link"></i>&nbsp;
                                i need help !</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="left carousel-control" href="#carousel_intro" data-slide="prev"
                    data-start="opacity: 0.6; left: 0%;" data-250="opacity:0; left: 5%;"><i
                        class="fa fa-chevron-left"></i></button>
            <button class="right carousel-control" href="#carousel_intro" data-slide="next"
                    data-start="opacity: 0.6; right: 0%;" data-250="opacity:0; right: 5%;"><i
                        class="fa fa-chevron-right"></i></button>
        </div>
        <div class="inner-top-bg">
        </div>
    </header>

    <!-- / HOMEPAGE -->
    <!--  SECTION-1 -->
    <section id="Section-1" class="fullbg">
        <div class="section-divider">
        </div>
        <div class="container">
            <div class="row">
                <div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
                    <h1>Features</h1>
                    <p class="lead">
                        Some stuff about this product.
                    </p>
                </div>
            </div>
            <div class="row color-white">
                <div class="col-md-12 animated fadeInUpNow">
                    <div class="boxservice">
                        <i class="fa fa-globe"></i>
                        <h3>global !</h3>
                        <p>
                            you can use this web site from every country .
                        </p>
                    </div>
                    <div class="boxservice">
                        <i class="fa fa-user"></i>
                        <h3>User friendly</h3>
                        <p>
                            easy to use , responsive , fast and secure ...
                        </p>
                    </div>
                    <div class="boxservice rightb">
                        <i class="fa fa-dashboard"></i>
                        <h3>fast</h3>
                        <p>
                            optimized to load fast
                        </p>
                    </div>
                    <div class="boxservice bottomb">
                        <i class="fa fa-cloud-download"></i>
                        <h3>Nice Theme and Template</h3>
                        <p>
                            a web site powered by bootstrap 4 , node.js .
                        </p>
                    </div>
                    <div class="boxservice bottomb">
                        <i class="fa fa-trophy"></i>
                        <h3>#1 Now ...</h3>
                        <p>
                            there are NO any same tool .
                        </p>
                    </div>
                    <div class="boxservice rightb bottomb">
                        <i class="fa fa-microphone"></i>
                        <h3>Full Documentation</h3>
                        <p>
                            full Documentation for any tool or service .
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- SECTION-2(gallery) -->
    <section id="Section-2" class="fullbg color-white">
        <div class="section-divider">
        </div>
        <div class="container demo-3">
            <div class="row">
                <div class="page-header text-center col-sm-12 col-lg-12 animated fade">
                    <h1>Services</h1>
                    <p class="lead">
                        What can We Do ?
                    </p>
                </div>
            </div>
            <div class="row animated fadeInUpNow">
                <div class="col-sm-12 col-lg-12">
                    <ul class="grid cs-style-4">
                        <li>
                            <figure>
                                <div>
                                    <img src="https://cdn2.iconfinder.com/data/icons/mathematics-geometry/154/math-function-mathematical-x-power-cube-512.png"
                                         alt="calculate-power-of-numbers">
                                </div>
                                <figcaption>
                                    <h3>power</h3>
                                    <span>m.kh.d <br> calculate power of numbers !</span>
                                    <a href="{{ route('power-show') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div>
                                    <img src="https://cdn2.iconfinder.com/data/icons/mathematics-geometry/154/math-function-root-x-power-n-512.png"
                                         alt="calculate-Ridge-of-numbers">
                                </div>
                                <figcaption>
                                    <h3>Ridge root</h3>
                                    <span>m.kh.d <br> calculate Ridge root of a number</span>
                                    <a href="{{ route('ridge-show') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div>
                                    <img src="http://tinhoc.ictu.vn/wp-content/uploads/2017/05/factorial.png"
                                         alt="calculate-Factorial-of-numbers">
                                </div>
                                <figcaption>
                                    <h3>Factorial</h3>
                                    <span>m.kh.d <br> calculate Factorial of a number</span>
                                    <a href="{{ route('factorial-show') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div>
                                    <img src="https://cdn2.iconfinder.com/data/icons/mathematics-geometry/154/math-mathematical-expression-coordinates-x-y-z-512.png"
                                         alt="premium-themes-templates">
                                </div>
                                <figcaption>
                                    <h3>subsets</h3>
                                    <span>m.kh.d <br> find count of subset of a array</span>
                                    <a href="{{ route('subsets-show') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div>
                                    <img src="https://cdn2.iconfinder.com/data/icons/mathematics-geometry/154/math-function-mathematical-fraction-512.png"
                                         alt="premium-themes-templates">
                                </div>
                                <figcaption>
                                    <h3>Deductible</h3>
                                    <span>m.kh.d <br> calculate any Deductible</span>
                                    <a href="{{ route('deductible-show') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div>
                                    <img src="https://cdn3.iconfinder.com/data/icons/calculator-7/154/math-mathematical-fraction-function-operation-calculator-512.png"
                                         alt="premium-themes-templates">
                                </div>
                                <figcaption>
                                    <h3>invert number</h3>
                                    <span>m.kh.d <br> calculate invert of numbers</span>
                                    <a href="{{ route('invert-show') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION-3(reviews) -->
    <section id="Section-3" class="fullbg color-white">
        <div class="section-divider">
        </div>
        <div class="container">
            <div class="row">
                <div class="page-header text-center col-sm-12 col-lg-12 animated fade">
                    <h1>Documentation</h1>
                    <p class="lead">
                        see Documentation of each service
                    </p>
                </div>
            </div>
            <div class="row testimonials animated fadeInUpNow">
                <div class="col-sm-12 col-lg-12">
                    <div class="arrow">
                    </div>
                    <div class="testimonials-slider">
                        <div class="slide">

                            <div class="testimonials-carousel-context">
                                <div class="testimonials-name">
                                    power <span>x^y</span>
                                </div>
                                <div class="testimonials-carousel-content">
                                    <p>
                                        The power of a number says how many times to use the number in a multiplication.
                                        <br>

                                        It is written as a small number to the right and above the base number.
                                        <br>
                                        In this example: 8^2 = 8 × 8 = 64.
                                        <br>
                                        for use this service just type your number in first field and your number power in second field !
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">

                            <div class="testimonials-carousel-context">
                                <div class="testimonials-name">
                                    Ridge root <span>x^1/y</span>
                                </div>
                                <div class="testimonials-carousel-content">
                                    <p>
                                        ... a value that can be multiplied by itself to give the original number.
                                        <br>
                                        for use this service just type your number in first field and your number root in second field !
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">

                            <div class="testimonials-carousel-context">
                                <div class="testimonials-name">
                                    factorial <span>x!</span>
                                </div>
                                <div class="testimonials-carousel-content">
                                    <p>
                                        The factorial function (symbol: !) means to multiply a series of descending natural numbers.
                                        <br>
                                        for use this service just type your number in first field  !
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">

                            <div class="testimonials-carousel-context">
                                <div class="testimonials-name">
                                    subsets <span>n!/k!(n-k)!</span>
                                </div>
                                <div class="testimonials-carousel-content">
                                    <p>
                                        A subset is a set contained in another set.
                                        <br>
                                        for use this service just type your set lenght in first field and lenght of your subset in second field !
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- SECTION-4(team) -->
    <section id="Section-4" class="fullbg color-white">
        <div class="section-divider">
        </div>
        <div class="container demo-3">
            <div class="row">
                <div class="page-header text-center col-sm-12 col-lg-12 animated fade">
                    <h1>Our Team</h1>
                    <p class="lead">
                        People behind this product
                    </p>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/img/dari.jpg') }}" alt="dariush eshoon">
                        <div class="caption">
                            <h4>داریوش اقدامی</h4>
                            <span class="primarycol">manager - graphic designer</span>
                            <p>
                                creative - happy :D<br>
                            </p>
                            <ul class="social-icons">
                                <li><a href="https://twitter.com/sir_daruosh"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://gmail.com/daruosheghdami"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/img/mmd.jpg') }}" alt="mamad eshoon">
                        <div class="caption">
                            <h4>محمدرضا خدامی</h4>
                            <span class="primarycol">js - php programmer </span>
                            <p>
                                logical - Tired :D<br>
                            </p>
                            <ul class="social-icons">
                                <li><a href="http://facebook.com/alastro-moody"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/mamad_official"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/alastor-moody-206932159/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="http://gmail.com/m.r.kh.d.1381"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection