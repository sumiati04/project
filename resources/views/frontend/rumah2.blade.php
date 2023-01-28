<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Type 45/84</title>

  <!-- FAVICON -->
  <link href="{{asset('assets2/img/favicon.png')}}" rel="shortcut icon">
  <!-- {{asset('assets2/PLUGINS CSS STYLE')}} -->
  <link href="{{asset('assets2/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
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
            <a class="navbar-brand" href="index.blade.php">
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
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/promo1')}}">Promo</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <br>
  <img src="{{asset('assets2/images/rumah45.jpg')}}" height="600px" width="1270px">
  <br><br>
  <center>
    <h1>DESAIN RUMAH</h1>
  </center>
  <br>
  <center>
    <table>
      <tr>
        <td>
          <h5>TAMPAK DEPAN</h5>
        </td>
        <td> &nbsp</td>
        <td>
          <h5>FASAD</h5>
        </td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td><img src="{{asset('assets2/images/rumah45.jpg')}}" height="500px" width="500px"></td>
        <td> &nbsp &nbsp &nbsp &nbsp</td>
        <td><img src="{{asset('assets2/images/fasadtype45.jpg')}}" height="500px" width="500px"></td>
      </tr>
    </table>
  </center>

  <br>
  <center>
    <h1>FASILITAS YANG ANDA PEROLEH</h1>
  </center>
  <br>
  <table>
    <tr>
      <td>
        <h3> &nbsp Kamar Tidur</h3>
      </td>
      <td><br><br></td>
      <td>
        <h3>Ruang Tamu</h3>
      </td>
    </tr>
    <tr>
      <td> &nbsp 2 Kamar tidur. Kamar tidur utama &amp; kamar tidur untuk anak &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      </td>
      <td><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<br></td>
      <td>Ruang tamu posisi di depan setelah pintu masuk</td>
    </tr>
    <tr>
      <td>
        <h3> &nbsp Kamar Mandi</h3>
      </td>
      <td><br><br></td>
      <td>
        <h3>Dapur & Ruang Makan</h3>
      </td>
    </tr>
    <tr>
      <td> &nbsp 1 kamar mandi</td>
      <td><br><br><br></td>
      <td>
        <h3>Taman & Ruang Terbuka Hijau</h3>
      </td>
    </tr>
  </table>
  <center><a href="{{url('/forminfo')}}"><button type="button" class="btn btn-outline-dark">Info Lebih Lanjut</button></a></center>
  <br>

  <br>
  <center>
    <h1>SPESIFIKASI BANGUNAN</h1>
  </center>
  <br>
  <table>
    <tr>
      <td>
        <h3> &nbsp Pondasi & Struktur</h3>
      </td>
      <td><br><br></td>
      <td>
        <h3>Air, Sanitary & Septiktank</h3>
      </td>
    </tr>
    <tr>
      <td> &nbsp Pondasi : Batu Kali. Struktur : Beton Bertulang</td>
      <td><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<br></td>
      <td>Air : PDAM. Sanitary : Closet Duduk atau Setara. Septiktank : Bioseptiktank</td>
    </tr>
    <tr>
      <td>
        <h3> &nbsp Dinding</h3>
      </td>
      <td><br><br></td>
      <td>
        <h3>Listrik</h3>
      </td>
    </tr>
    <tr>
      <td> &nbsp Batu Bata Merah</td>
      <td><br><br><br></td>
      <td>1300 watt/220 volt</td>
    </tr>
    <tr>
      <td>
        <h3> &nbsp Pintu, Jendela & Lantai</h3>
      </td>
      <td><br><br></td>
      <td>
        <h3>Dapur</h3>
      </td>
    </tr>
    <tr>
      <td> &nbsp Kusen : Aluminium. Pintu Utama : Panel Engineering. Pintu Kamar : Taewood. <br>&nbsp Pintu Kamar Mandi: PVC. Lantai : Geranite Tile 60x60</td>
      <td><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<br></td>
      <td>Kitchensink 1 Lubang Fin Keramik</td>
    </tr>
    <tr>
      <td>
        <h3> &nbsp Atap, Plafond & Penutup Atap</h3>
      </td>
      <td><br><br></td>
      <td>
        <h3>Cartport & Taman</h3>
      </td>
    </tr>
    <tr>
      <td> &nbsp Atap : Rangka Baja Ringan. Plafond : Galvalum, Gypsum. <br>&nbsp Penutup Atap : Genteng Beton Finish Cat</td>
      <td><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<br></td>
      <td>Cartport : Rabat. Taman : Bunga dan Rumput</td>
    </tr>
  </table><br>
  <center><a href="{{url('/forminfo')}}"><button type="button" class="btn btn-outline-dark">Info Lebih Lanjut</button></a></center>
  <br><br>

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
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
                  <h4>FindUs</h4>
                  <div class="col-lg-2 offset-lg-1 col-md-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5718.437534310721!2d107.59020571645648!3d-6.967173097664813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sid!2sid!4v1659770247231!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container End -->
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