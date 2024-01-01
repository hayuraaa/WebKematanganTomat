  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />

    <!-- Site Title-->
    <title>Kematang Tomat</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google-fonts -->
    <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Fonts-style -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Fonts-style -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- Modal-Effect -->
    <link href="css/component.css" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!-- Template Styles-->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Template Color-->
    <link rel="stylesheet" type="text/css" href="css/green.css" media="screen" id="color-opt" />
    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <!-- index lama -->
    <?php
    include 'postdemo.php';
    ?>

    <script type="text/javascript">
      $(document).ready(function() {
        setInterval(function() {
          $("#ceksensor").load('ceksensor.php');
        }, 1000);
      });
    </script>



  </head>

  <body data-spy="scroll" data-offset="80">

    <!-- Preloader -->
    <div class="animationload">
      <div class="loader">
        Please Wait....
      </div>
    </div>
    <!-- End Preloader -->


    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KematangTomat</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#contact">Sensor</a></li>
            <li><a href="#services">Dashboard</a></li>
            <li><a href="#twitter_tweet">About</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- /HOME -->
    <section class="main-home" id="home">
      <div class="home-page-photo"></div> <!-- Background image -->
      <div class="home__header-content">
        <div id="main-home-carousel" class="owl-carousel">
          <div>
            <h1 class="intro-title">Lihat Kematangan Tomat Kamu!</h1>
            <p class="intro-text">Kematang Tomat adalah Web Monitoring IOT dalam mengelompokkan buah tomat berdasarkan tingkat kematangannya <br /> Ayo Coba Sekarang!</p>
            <li><a class="btn btn-custom" href="#services">Get started</a></li>
          </div><!--slide item like paragraph-->
        </div>
      </div>
    </section>
    <!-- /End HOME -->

    <!-- CONTACT -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Status Kematangan</h3>
            <div class="titleHR"><span></span></div>
            <form role="form" name="ajax-form" id="ajax-form" action="php/contact.php" method="post" class="form-main">
              <div class="col-xs-12">
                <div class="row">
                  <div class="container" style="text-align:center; width: 600px;">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><span id="ceksensor"></span></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
      </div> <!-- container -->

    </section>
    <!-- End CONTACT -->

    <!-- / SERVICES -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Dashboard Hasil Sensor</h3>
            <div class="titleHR"><span></span></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-4">
              <div class="well">
                <h4>MATANG</h4>
                <p><?= $totalMatang ?> Buah</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="well">
                <h4>MENTAH</h4>
                <p><?= $totalMentah ?> Buah</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="well">
                <h4>Total</h4>
                <p><?= $totalKeseluruhan ?> Buah</p>
              </div>
            </div>
          </div> <!--/.container -->
        </div>
    </section>
    <!-- / End services-->


    <!-- TWITTER TWEET -->
    <section class="twitter_tweet parallax" id="twitter_tweet" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div id="testi-carousel" class="owl-carousel owl-spaced">
              <div>
                <i class="fa fa-twitter"></i>
                <h5>
                  Seperti layaknya pertanian yang bijak, Internet of Things (IoT) pada Smart Farm adalah kunci keberhasilan. Seperti sebuah tomat yang meraih kematangan secara sempurna, keseimbangan data dan teknologi pada Smart Farm menentukan tingkat kematangan tanaman dan kesuksesan pertanian modern

              </div><!--testimonials item like paragraph-->
              <div>
                <i class="fa fa-twitter"></i>
                <h5>
                  "Tingkat kematangan sebuah pertanian dapat diukur dari seberapa cerdasnya penggunaan teknologi IoT dalam memantau, mengoptimalkan, dan mengelola setiap prosesnya di Smart Farm, menjadikan 'tomat pintar' bukan sekadar buah, tapi puncak inovasi dalam menghasilkan pertanian yang berkelanjutan."
                </h5>

              </div><!--testimonials item like paragraph-->
            </div>
          </div> <!-- end col-md-8 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End TWITTER TWEET -->



    <!-- FOOTER begings -->
    <footer id="footer">
      <div class="footer-widgets-wrap">
        <div class="container text-center">
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>KEEP IN TOUCH</h4>
                <div class="footer-socials">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>ADDRESS</h4>
                <p>Lhokseumawe<br>
                  Universitas Malikussaleh</p>
                <p>Internet Of Things<br>
                  <a href="#">kematangtomat.komputasi.org</a><br>
                  Nepo | Haris
                </p>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>SUPPORT</h4>
                <p>You need support? Visit our support forum and open tickets for you questions.</p>
                <p><button type="button" class="btn btn-custom-sm">forum</button></p>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
          </div> <!-- end row -->
        </div> <!-- container -->
      </div>
      <div class="footer-bottom text-center"> <!-- Footer-copyright -->
        <p>©2023 Kematang Tomat</p>
      </div>
    </footer>
    <!-- End footer begings -->


    <!-- Scroll top -->
    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>


    <!-- Style switcher -->
    <div id="style-switcher" style="left: 0px;">
      <div>
        <h3>Select your color</h3>
        <ul class="pattern">
          <li><a class="color1" href="#"></a></li>
          <li><a class="color2" href="#"></a></li>
          <li><a class="color3" href="#"></a></li>
          <li><a class="color4" href="#"></a></li>
          <li><a class="color5" href="#"></a></li>
          <li><a class="color6" href="#"></a></li>
          <li><a class="color7" href="#"></a></li>
          <li><a class="color8" href="#"></a></li>
          <li><a class="color9" href="#"></a></li>
          <li><a class="color10" href="#"></a></li>
          <li><a class="color11" href="#"></a></li>
          <li><a class="color12" href="#"></a></li>
        </ul>
      </div>
      <div class="bottom">
        <a href="#" class="settings"><i class="fa fa-refresh fa-spin"></i></a>
      </div>
    </div>
    <!-- end Style switcher -->


    <!-- JavaScript
     ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- initialize jQuery Library -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- modal-effect -->
    <script src="js/classie.js"></script>
    <script src="js/modalEffects.js"></script>
    <!-- Counter-up -->
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Jquery-Nav -->
    <script src="js/jquery.nav.js"></script>
    <!-- Owl carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!-- App JS -->
    <script src="js/app.js"></script>

    <!-- Switcher script for demo only -->
    <script type="text/javascript" src="js/switcher.js"></script>


  </body>

  </html>