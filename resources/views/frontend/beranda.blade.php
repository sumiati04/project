<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- FAVICON -->
    <link href="{{asset('assets2/img/favicon.png')}}" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets2/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/plugins/bootstrap/css/bootstrap-slider.css')}}">
    <!-- Font Awesome -->
    <link href="{{asset('assets2/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('assets2/plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="{{asset('assets2/plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light navigation">
                        <a class="navbar-brand">
                            <img src="{{asset('assets2/images/logo.png')}}" height="50px" width="100px">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/beranda')}}">Home</a>
                                </li>
                                <li class="nav-item dropdown dropdown-slide">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Type<span><i class="fa fa-angle-down"></i></span>
                                    </a>

                                    <!-- Dropdown list -->
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('/rumah1')}}">Type 36/75</a>
                                        <a class="dropdown-item" href="{{url('/rumah2')}}">Type 45/84</a>
                                        <a class="dropdown-item" href="{{url('/rumah3')}}">Type 54/75</a>
                                        <a class="dropdown-item" href="{{url('/rumah4')}}">Type 60/84</a>
                                        <a class="dropdown-item" href="{{url('/rumah5')}}">Type 90/100</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--===============================
=            Hero Area            =
================================-->

    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1>SITUTARATE RESIDENCE </h1>
                        <p>Join the millions who buy and sell from each other <br> everyday in local communities around the world</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>

    <br>
    <div class="col-lg-12">
        <div class="category-block">
            <table>
                <tr>
                    <td><img src="{{asset('assets2/images/fam.jpg')}}" height="400px" width="500px"></td>
                    <td>
                        <p></p>
                    </td>
                    <td>
                        <h4>Pilihan Tepat Untuk Keluarga Anda</h4>
                        <ol>
                            <li>
                                <p>
                                    Merupakan produk perumahan dari Situtarate Residence, lokasi perumahan ini berada di Bandung, Jawa Barat.
                                    Memiliki desain yang mewah namun minimalis, menjadikan perumahan ini pilihan terbaik untuk temapt tinggal anda dimasa depan
                                </p>
                            </li>
                            <li>
                                <center>
                                </center>
                            </li>
                        </ol>
                    </td>
                </tr>
            </table>
            <!-- <img src="images/fam.jpg" height="400px" width="500px">
				<div class="elementor-text-editor elementor-clearfix">
					<p>Tinggal di perumahan berbasis Islam pastinya lebih menyenangkan jika dibandingkan dengan perumahan pada umumnya. Bayangkan kehidupan yang penuh kekeluargaan dan saling tegur sapa satu sama lain. Dilengkapi dengan fasilitas masjid sebagai pemersatu antar penghuni Mulia Village Juanda dan playground untuk tempat bersantai dan bermain. Serta fasilitas pendidikan tahfidz dan area memananah menjadikan Mulia Village Juanda sebagai tempat tumbuh kembang anak yang terbaik. Jadi, jangan terlalu lama berfikir booking unit anda sekarang karena jumlah unit sangat terbatas!</p>
				</div>
			</div> -->
        </div>

        <!--==========================================
=            All Category Section            =
===========================================-->

        <section class=" section">
            <!-- Container Start -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section title -->
                        <div class="section-title">
                            <h2>BEBERAPA TYPE PILIHAN</h2>
                        </div>
                        <div class="row">
                            <!-- Category list -->
                            @foreach ($datas as $data)

                            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                <div class="category-block">
                                    <div class="header">
                                        <img src="{{$data->image()}}" height="200px" width="300px">
                                    </div>
                                    <ul class="category-list">
                                        <li>{{ $data->luas_rumah }}</li>
                                        <li>{{ $data->fasilitas_rumah }}</li>
                                        <li>{{ $data->harga }}</li>
                                        <li>{{ $data->tipe->tipe_rumah }}</li>
                                    </ul><br>
                                    <center>
                                        <a href="{{url('/rumah1')}}"><button type="button" class="btn btn-outline-dark">Info Detail</button></a>
                                    </center>
                                </div>
                            </div> <!-- /Category List -->
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </section>

        <!--============================
=            Footer            =
=============================-->

        <footer class="footer section section-sm">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
                <!-- About -->
                <div class="block about">
                    <!-- footer logo -->
                    <img src="{{asset('assets2/images/logoo.png')}}" height="150px" width="250px">
                    <!-- description -->
                    <!-- <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                </div>
            </div>
            <!-- Link list -->
            <div class="col-lg-2 offset-lg-1 col-md-3">
                <div class="block">
                    <h4>Social Media</h4>
                    <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon">
                                <i class="bi bi-facebook"></i>
                            </span>
                            <span class="elementor-icon-list-text">Situtarate Residence</span>
                        </li>
                    </ul>
                    <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon">
                                <i class="bi bi-youtube"></i>
                            </span>
                            <span class="elementor-icon-list-text">Situtarate Residence</span>
                        </li>
                    </ul>
                    <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon">
                                <i class="bi bi-instagram"></i>
                            </span>
                            <span class="elementor-icon-list-text">Situtarate Residence</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
            <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <h4 style="color:white ;">FindUs</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5718.437534310721!2d107.59020571645648!3d-6.967173097664813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sid!2sid!4v1659770247231!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
        <!-- Footer Bottom -->
        <footer class="footer-bottom">
            <!-- Container Start -->
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-12">
                       <!-- Copyright -->
                        <div class="copyright">
                            <p>Copyright © <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
                        </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <!-- Social Icons -->
                            <ul class="social-media-icons text-right">
                              <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
                              <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
                              <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
                              <li><a class="fa fa-vimeo" href=""></a></li>
                            </ul>
                          </div>
                    </div>
                </div>
                <!-- Container End -->
                <!-- To Top -->
                <div class="top-to">
                    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
                </div>
        </footer>

        <!-- JAVASCRIPTS -->
        <script src="{{asset('assets2/plugins/jQuery/jquery.min.js')}}"></script>
        <script src="{{asset('assets2/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets2/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets2/plugins/bootstrap/js/bootstrap-slider.js')}}"></script>
        <!-- tether js -->
        <script src="{{asset('assets2/plugins/tether/js/tether.min.js')}}"></script>
        <script src="{{asset('assets2/plugins/raty/jquery.raty-fa.js')}}"></script>
        <script src="{{asset('assets2/plugins/slick-carousel/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets2/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets2/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
        <script src="{{asset('assets2/plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
        <!-- google map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
        <script src="{{asset('assets2/plugins/google-map/gmap.js')}}"></script>
        <script src="{{asset('assets2/js/script.js')}}"></script>

</body>

</html>
