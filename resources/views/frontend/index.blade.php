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
    <link rel="stylesheet" type="text/css" href="{{('/frontend/css/style.css')}}">
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
                            <a class="navbar-brand" href="#"> <span class="logo-dec">DWIMITRA TUNGGAL
                            ABADI</span></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#main-header">Beranda</a></li>
                                <li class=""><a href="#feature">Staff</a></li>
                                <li class=""><a href="#service">Layanan</a></li>
                                <li class=""><a href="#portfolio">Portfolio</a></li>
                                <li class=""><a href="#testimonial">Testimoni</a></li>
                                <li class=""><a href="#blog">Berita</a></li>
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
                            style="width: 200px;">
                            <h2 class="bnr-sub-title">DWIMITRA TUNGGAL ABADI</h2>
                            <p class="bnr-para">PT. Dwimitra Tunggal Abadi adalah Perusahaan Swasta Nasional
                                bergerak di bidang jasa konstruksi yang berkedudukan di Kota Tangerang Selatan,
                                <br>PT. Dwimitra Tunggal Abadi berpengalaman dalam bidang pembangunan konstruksi
                                jalan rigid, hotmix, konstruksi pembangunan gedung, real estate, properti dan
                            perlengkapan eksternal bangunan lainnya..</p>

                            <div class="overlay-detail">
                                <a href="#feature"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">Staff</h2>
                <hr class="bottom-line">
            </div>
            <div class="row">
                @foreach($staff as $item)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center staf">
                        <div class="item-img text-center">
                            <img src="{{('/foto_staff/'.$item->foto)}}" class="img-responsive staf__img">
                        </div>
                        <h3 class="pad-bt15">{{$item->nama}}</h3>
                        <h5 class="pad-bt15"><strong>{{$item->jabatan}}</strong></h5>
                        <p>{{$item->deskripsi}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!---->
    <!---->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Layanan</h2>
                    <p class="sub-title pad-bt15">kami menyediakan jasa di bidang pembangunan konstruksi jalan
                        rigid, hotmix, konstruksi pembangunan gedung, real estate, properti dan perlengkapan
                    eksternal bangunan lainnya.</p>
                    <hr class="bottom-line">
                </div>
                @foreach($layanan as $item)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <h3>{{$item->nama_layanan}}</h3>
                        <p>{!! Str::limit($item->deskripsi, 100) !!}</p>
                        <a
                        href="/lihat-layanan/{{$item->id}}">Selengkapnya...</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Portofolio</h2>
                    <p class="sub-title pad-bt15">Berikut adalah portofolio proyek yang sudah kami kerjakan</p>
                    <hr class="bottom-line">
                </div>

                @foreach($portofolio as $item)
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                    <a href="/lihat-portofolio/{{$item->id}}">
                        <figure>
                            <img src="{{asset('/gambar_portofolio/'.$item->gambar)}}" class="img-responsive">
                            <figcaption>
                                <h2>{{$item->judul}}</h2>
                                <p>{!! Str::limit($item->deskripsi, 100) !!}</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach

            </div>
        </section>
        <!---->
        <!---->
        <section id="testimonial" class="wow fadeInUp delay-05s">
            <div class="bg-testicolor">
                <div class="container section-padding">
                    <div class="row">
                        <div class="testimonial-item">
                            <ul class="bxslider">
                                @foreach($testimoni as $item)
                                <li>
                                    <blockquote>
                                        <img src="{{asset('/gambar_testimoni/'.$item->gambar)}}" class="img-responsive">
                                        <p>{{$item->testimoni}}.</p>
                                    </blockquote>
                                    <small>{{$item->nama}}, {{$item->keterangan}}</small>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---->
        <section id="blog" class="section-padding wow fadeInUp delay-05s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="service-title pad-bt15">Berita Terbaru</h2>
                        <p class="sub-title pad-bt15">Berikut merupakan berita terbaru dari perusahaan kami.</p>
                        <hr class="bottom-line">
                    </div>

                    @foreach($berita as $item)
                    <div class="col-md-4 col-sm-6 col-xs-12 mx">
                        <div class="blog-sec">
                            <div class="blog-img">
                                <a href="/lihat-berita/{{$item->id}}">
                                    <img src="{{asset('/gambar_berita/'.$item->gambar)}}" class="img-responsive">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h2>{{$item->judul_berita}}</h2>
                                <div class="blog-comment">
                                    <p><i class="fa fa-calendar"></i> {{$item->created_at->format('d m Y')}}</p>
                                    <p>
                                        <span><a href="#"><i class="fa fa-eye"></i></a> {{$item->views}}</span></p>
                                    </div>
                                    <a href="/lihat-berita/{{$item->id}}" class="read-more">Selengkapnya ???</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
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
                                    <div class="contact-form">
                                        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=PT%20dwimitra%20tunggal%20abadi&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>

                                    </div>
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
                        <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
          -->
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
