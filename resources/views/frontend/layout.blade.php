<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. DWIMITRA TUNGGAL ABADI</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
        content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="shortcut icon" href="{{('/frontend/img/logo.png')}}">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="{{('/frontend/css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('/frontend/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('/frontend/css/style-content.css')}}">
    <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

    <div class="loader"></div>
    <div id="myDiv">
        <!--HEADER-->
        <div class="header">
            <div class="bg-color">
                <header id="main-header">
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/"> <span class="logo-dec">DWIMITRA TUNGGAL
                                        ABADI</span></a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class=""><a href="/">Beranda</a></li>
                                    <li class="active"><a href="#content">@yield('title')</a></li>
                                    <li class=""><a href="#contact">Kontak</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="banner-info text-center wow fadeIn delay-05s">
                                <img src="{{asset('/frontend/img/logo.png')}}" class="bnr-sub-title"
                                    style="width: 100px;">
                                <h3 class="bnr-sub-title">@yield('title') DWIMITRA TUNGGAL ABADI</h3>
                                <div class="overlay-detail">
                                    <a href="#content"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ HEADER-->
        <!---->
        <section id="content" class="section-padding wow fadeInUp delay-05s">
            <div class="container">
                @yield('content')
            </div>
        </section>
        <!---->
        <!---->
        <section id="contact" class="section-padding wow fadeInUp delay-05s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center white">
                        <h2 class="service-title pad-bt15">Kontak Kami</h2>
                        <p class="sub-title pad-bt15">untuk menghubungi kami silahkan menghubungi lewat kontak yang
                            tertera di bawah.</p>
                        <hr class="bottom-line white-bg">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="loction-info white">
                            <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>{{$profil->alamat}}</p>
                            <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>{{$profil->email}}</p>
                            <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>{{$profil->telpon}}</p>
                            <p><i class="fa fa-instagram fa-fw pull-left fa-2x"></i><a href="{{$profil->instagram}}"
                                    style="text-decoration: none; color: white;">{{$profil->instagram}}</a></p>
                            <p><i class="fa fa-facebook fa-fw pull-left fa-2x"></i><a href="{{$profil->facebook}}"
                                    style="text-decoration: none; color: white;">{{$profil->facebook}}</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=PT%20dwimitra%20tunggal%20abadi&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!---->
        <!---->
        <footer id="footer">
            <div class="container">
                <div class="row text-center">
                    <p>&copy; Baker Theme. All Rights Reserved.</p>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </footer>
        <!---->
    </div>
    <script src="{{('/frontend/js/jquery.min.js')}}"></script>
    <script src="{{('/frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{('/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{('/frontend/js/wow.js')}}"></script>
    <script src="{{('/frontend/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{('/frontend/js/custom.js')}}"></script>
    <script src="{{('/frontend/contactform/contactform.js')}}"></script>

</body>

</html>
