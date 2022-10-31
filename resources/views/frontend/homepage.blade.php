<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>OMPBMS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fevicon -->
    <link rel="icon" href="{{url('frontend/assets/images/fevicon.png')}}" sizes="128x128" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('frontend/assets/css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{url('frontend/assets/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{url('frontend/assets/images/logo.png')}}"
                                                alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">

                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu ">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="index.html">Home</a> </li>

                                            <li> <a href="about.html">About</a> </li>

                                            <li> <a href="gallery.html">Music Pads</a> </li>
                                            <li> <a href="contact.html">Contact</a> </li>

                                            <li> <a href="{{route('login.form')}}">login</a> </li>
                                            <li> <a href="{{route('registration.form')}}">Registrations</a> </li>
                                            <li> <a class="last_manu" href="#"><img
                                                        src="{{url('frontend/assets/images/search_icon.png')}}"
                                                        alt="#" /></a> </li>

                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- end header -->
            <section class="slider_section">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-bg">
                                                <span>The Best</span>
                                                <h1>Online music pad booking</h1>
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making
                                                    it look</p>
                                                <a href="{{route('login.form')}}">Login</a> <a href="{{route('registration.form')}}">Registrations</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="carousel-item">

                            <div class="container ">
                                <div class="carousel-caption">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-bg">
                                                <span>The Best</span>
                                                <h1>Online music pad booking</h1>
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making
                                                    it look</p>
                                                <a href="{{route('login.form')}}">Login</a><a href="#">Registrations </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-bg">
                                                <span>The Best</span>
                                                <h1>Online music pad booking</h1>
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making
                                                    it look</p>
                                                <a href="{{route('login.form')}}">Login</a> <a href="#">Registrations </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </a> -->
                </div>



            </section>
        </div>
    </header>



    <!-- about  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <h2>About Us</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        <a href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{url('frontend/assets/images/about.png')}}" alt="#" /></figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end abouts -->





    <script src="{{url('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{url('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/custom.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>
