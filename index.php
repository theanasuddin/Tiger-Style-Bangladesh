<?php session_start(); ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tiger Style Bangladesh: TSB. Official website. Leading knitwear exporter based in Dhaka, Bangladesh. TSB's product range consists of clothing for Men, Women, and Children including T-Shirts and Polo Shirts in a wide variety of designs.">
  <meta name="author" content="Anas Uddin">
  <link rel="mask-icon" sizes="any" href="assets/custom/images/tsb_logo.svg" color="#10263E">
  <link rel="apple-touch-icon" href="assets/custom/images/apple-touch-icon-192x192.png" sizes="192x192">
  <link rel="fluid-icon" href="assets/custom/images/fluidicon.png" title="Tiger Style Bangladesh">
  <meta http-equiv="Content-Type" content="text/html;">
  <meta http-equiv="Content-Language" content="en-us">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="robots" content="index,follow,noarchive">
	<meta name="googlebot" content="index,follow">
	<meta name="url" content="https://www.tigerstylebd.com/">
	<meta name="keywords" content="Tiger Style Bangladesh, TSB, Official Website, Knitwear, Exporter, Bangladesh RMG, Mohiuddin Ahmed Munir, William Amitav Dobey, Rubel Rana, Nazmul Islam, Blog, Exporter Exporting Company, T-Shirts, Polo Shirts, Knit Supplier, Dhaka, Bangladesh, Uttara, Garments, Men’s Knitwear, Women’s Knitwear, Kid's Knitwear, Knitwear Manufacturer">
  <link rel="canonical" href="https://www.tigerstylebd.com/" data-pjax-transient>
  <link rel="alternate" hreflang="x-default" href="https://www.tigerstylebd.com/">
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-title" content="Tiger Style Bangladesh" />
  <meta name="apple-mobile-web-app-status-bar-style" content="white" />
  <link rel="search" type="application/opensearchdescription+xml" href="opensearch.xml" title="Tiger Style Bangladesh">
  <meta name="hostname" content="tigerstylebd.com">
  <meta name="expected-hostname" content="tigerstylebd.com">
  <meta name="selected-link" value="/index.php" data-pjax-transient>

  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#2C3E4F">
  <meta name="msapplication-navbutton-color" content="#2C3E4F">
  <meta name="msapplication-config" content="favicon/browserconfig.xml">
  <meta name="application-name" content="Tiger Style Bangladesh" />

  <meta itemprop="name" content="Tiger Style Bangladesh: TSB - Knitwear Exporter In BD.">
	<meta itemprop="description" content="Tiger Style Bangladesh: TSB. Official website. Leading knitwear exporter based in Dhaka, Bangladesh. TSB's product range consists of clothing for Men, Women, and Children including T-Shirts and Polo Shirts in a wide variety of designs.">
	<meta itemprop="image" content="https://www.tigerstylebd.com/assets/custom/images/meta-image.jpg">

  <meta property="og:site_name" content="Tiger Style Bangladesh" />
  <meta property="og:url" content="https://www.tigerstylebd.com/index.php">
  <meta property="og:title" content="Tiger Style Bangladesh: TSB - Knitwear Exporter In BD.">
  <meta property="og:description" content="Tiger Style Bangladesh: TSB. Official website. Leading knitwear exporter based in Dhaka, Bangladesh. TSB's product range consists of clothing for Men, Women, and Children including T-Shirts and Polo Shirts in a wide variety of designs.">
  <meta property="og:image" content="https://www.tigerstylebd.com/assets/custom/images/meta-image.jpg">
  <meta name="og:image:secure_url" content="https://www.tigerstylebd.com/assets/custom/images/meta-image.jpg" />
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:type" content="website" />
  <!--<meta property="fb:app_id" content="1470168793264145" />-->
  <meta property="og:author" content="https://www.facebook.com/theanasuddin" />
  <meta property="og:locale" content="en_US">

  <meta property="twitter:site" content="@tigerstylebd">
  <!--<meta property="twitter:site:id" content="13334762">-->
  <meta property="twitter:creator" content="@tigerstylebd">
  <!--<meta property="twitter:creator:id" content="13334762">-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Tiger Style Bangladesh: TSB - Knitwear Exporter In BD.">
  <meta property="twitter:description" content="Tiger Style Bangladesh: TSB. Official website. Leading knitwear exporter based in Dhaka, Bangladesh. TSB's product range consists of clothing for Men, Women, and Children including T-Shirts and Polo Shirts in a wide variety of designs.">
  <meta property="twitter:image:src" content="https://www.tigerstylebd.com/assets/custom/images/tsb-logo.jpg">
  <meta property="twitter:image:width" content="4096">
  <meta property="twitter:image:height" content="4096">
  <meta property="twitter:image:alt" content="TSB Logo">
  <meta name="twitter:url" content="https://www.tigerstylebd.com/">
  <meta name="twitter:domain" content="tigerstylebd.com"/>

  <title>Tiger Style Bangladesh: TSB - Knitwear Exporter In BD.</title>

  <!-- animate.css-->
  <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
  <!-- Load Screen -->
  <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- Font Awesome 5 -->
  <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
  <!-- tsb Icons -->
  <link href="assets/custom/css/tsb-icons.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
  <!-- OffCanvasMenu -->
  <link href="assets/vendor/OffCanvasMenuEffects/css/menu_sideslide.css" rel="stylesheet">
  <!-- portfolio filter gallery -->
  <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
  <!-- FANCY BOX -->
  <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
  <!-- Video Background -->
  <link href="assets/vendor/video-background/video-background.css" rel="stylesheet">
  <!-- FANCY BOX -->
  <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
  <!-- RANGE SLIDER -->
  <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
  <!-- OWL CAROUSEL  -->
  <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
  <!-- tsb CUSTOM CSS FILE -->
  <link href="assets/custom/css/custom.css" rel="stylesheet">
  <!-- tsb CUSTOM CSS RESPONSIVE FILE -->
  <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
  <link href="http://mozilla.github.io/foundation-icons/assets/foundation-icons.css" type="text/css" rel="stylesheet">
</head>

<body>

  <div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
      <form method="post" action="search_tsb.php" class="w-50">
        <div class="row">
          <div class="col-10">
            <input type="search" name="keyword" class="form-control palce bg-transparent border-0 search-input" placeholder="Search TSB ..." />
          </div>
          <div class="col-2 mt-3">
            <button type="submit" name="submit-keyword" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
          </div>
        </div>
      </form>
    </div>

  </div>

  <!-- Loading Screen -->
  <div id="ju-loading-screen">
    <div class="sk-double-bounce">
      <div class="sk-child sk-double-bounce1"></div>
      <div class="sk-child sk-double-bounce2"></div>
    </div>
  </div>

  <!-- Start Top Header -->
  <div class="tsb-light-background-color tsb-top-header-signin">
    <div class="container">
      <div class="row" id="top-row">
        <div class="col-12 col-sm-2 col-lg-5">
        </div>
        <div class="col-12 col-sm-5 col-lg-4 text-right">
          <p class="tsb-first-text-color font-13"><span class="tsb-iconphone"></span> Phone : <a href="tel:+880 1711985473">(+880) 1711985473</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+880 1811189894">(+880) 1811189894</a></p>

        </div>

        <div class="col-12 col-sm-5 col-lg-3 text-right">
          <p class="tsb-first-text-color font-13"><span class="tsb-iconemail"></span> Email: <a href="mailto:info@tigerstylebd.com">info@tigerstylebd.com</a></p>
        </div>

      </div>
    </div>
  </div>

  <!-- /End Top Header -->

  <!-- Start tsb Navigation -->
  <div class="tsb-light-background-color py-3 py-lg-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-9 pr-md-0">
          <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

            <a class="navbar-brand pl-0" href="index.php"><img style="height:80px" src="assets/custom/images/tsb_logo.svg" alt="TSB Logo" class="tsb-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="tsb-iconmenu-icon text-white font-16"></span>
            </button>
            <div class="collapse navbar-collapse" id="fablesNavDropdown">

              <ul class="navbar-nav mx-auto tsb-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">
                    Home
                  </a>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">
                    About
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.php">
                    Products
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.php">
                    Gallery
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.php">
                    Blog
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">
                    Contact
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.tigerstylebd.com:2096/3rdparty/roundcube/index.php" target="_blank">
                    Webmail
                  </a>
                </li>
              </ul>

            </div>
          </nav>
        </div>
        <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">

          <div class="tsb-header-icons">
            <a href="#" class="open-search tsb-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 tsb-second-hover-color border-0 max-line-height">
              <span class="tsb-iconsearch-icon"></span>
            </a>



          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /End tsb Navigation -->


  <!-- Start Header -->
  <div class="tsb-header bg-white index-3-height bg-rules overflow-hidden tsb-after-overlay">
    <div class="container position-relative z-index">
      <div class="row">
        <div class="col-12 col-lg-7 offset-lg-4 wow fadeInUpBig" data-wow-duration="2s">
          <div class="index-3-height-caption">
            <p class="font-30 tsb-second-text-color">Welcome to</p>
            <h1 class="text-white bold-font mb-2 font-40">Tiger Style Bangladesh</h1>
            <p class="text-white font-22 mb-3">
              Leading Knitwear Exporter of Bangladesh RMG Industry
            </p>
            <a href="contact.php" class="btn tsb-second-background-color tsb-second-border-color white-color rounded-0 mr-4 px-4 py-2 white-color-hover">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /End Header -->

  <!-- Start Service -->
  <div class="container-fluid my-0 my-lg-5">
    <div class="row">
      <div class="col-12 col-lg-2 p-0">
        <div class="text-center tsb-main-background-color tsb-sqr-rotation tsb-second-border-color tsb-sqr-rotation-services">
          <div class="text-rotate">
            <h2 class="text-white font-25">What <br><span class="white-color font-40 bold-font mt-2 d-block">We Do</span></h2>
            <p class="tsb-third-text-color mt-4 mb-3 mb-lg-5">
              Services - We offer our clients with a mesmerizing collection of knitwears.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-10 p-0">
        <div class="tsb-index-services tsb-after-overlay py-md-5 px-3 pr-md-4 pl-md-5 bg-rules sm-index-products mt-lg-0 mt-xl-5">
          <div class="container z-index position-relative">
            <div class="row">
              <div class="col-12 col-lg-10 offset-lg-2">
                <div class="row">
                  <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".4s">
                    <div class="row text-center text-md-left">
                      <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                        <img style="height:42px; width:42px" src="assets/custom/images/shirt.svg">
                      </div>
                      <div class="col-12 col-md-9 pl-md-0">
                        <h2 class="text-white font-19 semi-font mb-2">Knitwears For All Groups And Ages</h2>
                        <div class="font-14 text-white">
                          Our product range consists of clothing for Men, Women, and Children including T-Shirts and Polo Shirts in a wide variety of designs.
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".8s">
                    <div class="row text-center text-md-left">
                      <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                        <img style="height:42px; width:42px" src="assets/custom/images/sewing-machine.svg">
                      </div>
                      <div class="col-12 col-md-9 pl-md-0">
                        <h2 class="text-white font-19 semi-font mb-2">Sampling And Development</h2>
                        <div class="font-14 text-white">
                          Our specialised designers are responsible for crafting the entire assortment, making use of their creative and artistic instincts. The collection of garments, accessories and textiles display a unique blend of traditional
                          and modern concepts of styling and fashion.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.2s">
                    <div class="row text-center text-md-left">
                      <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                        <img style="height:42px; width:42px" src="assets/custom/images/mannequin.svg">
                      </div>
                      <div class="col-12 col-md-9 pl-md-0">
                        <h2 class="text-white font-19 semi-font mb-2">Modern Designs, Prints And Patterns</h2>
                        <div class="font-14 text-white">
                          Latest designs are symbol of modern trends and everyone likes trendy clothes which reflects their wardrobe. We export latest trendy garments which are classic as well as modern and iconic.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.6s">
                    <div class="row text-center text-md-left">
                      <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                        <img src="assets/custom/images/measuring-tape.svg" style="height:42px; width:42px">
                      </div>
                      <div class="col-12 col-md-9 pl-md-0">
                        <h2 class="text-white font-19 semi-font mb-2">Tailoring And Quality Assurance</h2>
                        <div class="font-14 text-white">
                          We have efficient quality control team. Our quality department with qualified experienced personnels constantly monitor all the stages of production process to ensure that quality is right in all levels. We assure all the
                          garments are thoroughly tested and checked by quality team before the products are delivered to customer.Our diverse products have been appreciated and well-responded by global clients due to durability, fine stitching,
                          smooth finishing, vibrant color schemes and above all top-notch quality.

                        </div>
                      </div>
                      <a href="about.php#restofservices" class="btn white-color font-18 all-index-products tsb-second-hover-color border-0 p-0
                                                   position-absolute d-block pt-4 pt-md-0 z-index ">
                        <span class="underline">Know More</span>
                        <span class="tsb-iconarrow-light ml-2 font-13"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service -->

  <!-- Start why choose us -->
  <div class="container-fluid">
    <div class="row mt-3 mt-md-5">
      <div class="col-12 col-lg-5 offset-lg-1 mb-4 mb-lg-0 overflow-hidden">
        <h2 class="tsb-second-text-color font-35 bold-font wow fadeInLeft"> Why <span class="tsb-main-text-color">Choose Us?</span></h2>

        <p class="tsb-forth-text-color my-3 wow fadeInLeft">
          Simply because we are the best! There are hundreds of exporters to choose from. Finding one you can count on and build a keen relationship with for the long term is a daunting task. Here are some reasons why you have made the best
          decision for your company by choosing us.
        </p>

        <a href="about.php#restofwhyus" class="btn tsb-second-background-color white-color text-white white-color-hover py-2 px-4 my-2 rounded-0 font-18">Read More</a>

      </div>
      <div class="col-12 col-lg-5 offset-lg-1 p-0 text-right mb-lg-5">
        <div class="choose-img-border-after tsb-second-border-color position-relative">
          <img src="assets/custom/images/tsb-choose-us-index.jpg" alt="TSB Choose Us" class="w-100">
        </div>
      </div>
    </div>
  </div>
  <!-- End why choose us -->

  <!-- Start Testimonials -->
  <div class="tsb-testimonial tsb-after-overlay py-4 py-lg-5 testimonial-index-bg mt-4 mt-lg-5 bg-rules">
    <div class="container">
      <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-2">Testimonial</h2>
      <p class="font-14 tsb-third-text-color text-center z-index position-relative mt-2">See what others are saying</p>
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">

          <div class="owl-carousel owl-theme dots-0 mt-4 center-testimonial-carousel padding-outer" id="tsb-testimonial-carousel">
            <div class="text-center tsb-testimonial-carousel-item">
              <div>
                <img style="height:120px; width:120px" src="assets/custom/images/shahadat-khandaker-tutul.jpg" alt="Shahadat Khandaker Tutul" class="tsb-testimonial-carousel-img rounded-circle">
              </div>
              <div>
                <p class="mb-3 tsb-third-text-color tsb-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                  Best knitwear exporter without any doubt. Top-notch quality. Wishing them a great future ahead.
                </p>
                <h3 class="font-14 semi-font text-white">Shahadat Khandaker Tutul</h3>
                <h3 class="font-13 font-italic white-color mt-2">Founder & Managing Director, Denim Venture Ltd.</h3>

              </div>
            </div>
            <div class="text-center tsb-testimonial-carousel-item">
              <div>
                <img style="height:120px; width:120px" src="assets/custom/images/sarif-anwar.jpg" alt="Sarif Anwar" class="tsb-testimonial-carousel-img rounded-circle">
              </div>
              <div>
                <p class="mb-3 tsb-third-text-color tsb-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                  An emerging competitor in the knitwear arena. Dedication for innovation is so on point. Going to defeat others in knitwear game.
                </p>
                <h3 class="font-14 semi-font text-white">Sarif Anwar</h3>
                <h3 class="font-13 font-italic white-color mt-2">Director, Denim Venture Ltd.</h3>

              </div>
            </div>
            <div class="text-center tsb-testimonial-carousel-item">
              <div>
                <img style="height:120px; width:120px" src="assets/custom/images/rubel-rana.jpg" alt="Rubel Rana" class="tsb-testimonial-carousel-img rounded-circle">
              </div>
              <div>
                <p class="mb-3 tsb-third-text-color tsb-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                  A hard-working team with the touch of passion everywhere. As a person from marketing, all I can see is immense potential of their new products. Best of luck.
                </p>
                <h3 class="font-14 semi-font text-white">Rubel Rana</h3>
                <h3 class="font-13 font-italic white-color mt-2">Sales & Marketing Manager, Organic Group.</h3>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End   Testimonials -->

  <!-- Start Agency -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
        <h2 class="tsb-second-text-color font-35 font-weight-bold my-3 mt-md-5 mb-md-4">We are a dedicated company!</h2>
        <p class="tsb-forth-text-color">
          Since the beginning of TSB, we were able to put the footprint of success in every step. At our territory quality is an obligation. Excellence is a state of mind held by every employee at Tiger Style. It is this state of mind that inspires
          our task force to manufacture quality garments. We remain true to our values, engage with passion and energy to ensure that our name continues to grow like this.
        </p>
      </div>
    </div>
    <div class="row mt-4 mt-md-5">
      <div class="col-6 col-md-3">
        <div class="tsb-counter">
          <h2 class="tsb-counter-value font-40 font-weight-bold mb-3 tsb-main-text-color border tsb-second-border-color d-inline-block px-4 py-2 mb-4" data-count="7">0</h2>
          <h3 class="font-14 semi-font tsb-forth-text-color">SATISFIED CLIENTS</h3>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="tsb-counter">
          <h2 class="tsb-counter-value font-40 font-weight-bold mb-3 tsb-main-text-color border tsb-second-border-color d-inline-block px-4 py-2 mb-4" data-count="22">0</h2>
          <h3 class="font-14 semi-font tsb-forth-text-color">COMPANY MEMBERS</h3>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="tsb-counter">
          <h2 class="tsb-counter-value font-40 font-weight-bold mb-3 tsb-main-text-color border tsb-second-border-color d-inline-block px-4 py-2 mb-4" data-count="4">0</h2>
          <h3 class="font-14 semi-font tsb-forth-text-color">AWWARDS WIN</h3>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="tsb-counter">
          <h2 class="tsb-counter-value font-40 font-weight-bold mb-3 tsb-main-text-color border tsb-second-border-color d-inline-block px-4 py-2 mb-4" data-count="2">0</h2>
          <h3 class="font-14 semi-font tsb-forth-text-color">YEARS EXPIRIENCE</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- End Agency -->

  <!-- Start Overlay Caption -->
  <div class="tsb-testimonial tsb-after-overlay bg-rules py-4 py-md-5 mt-lg-5" style="background-image: url(assets/custom/images/tsb-knitwear-overlay.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 text-center position-relative z-index wow zoomIn" data-wow-duration="1.5s">
          <h3 class="white-color mb-3 font-25 font-weight-bold">A new milestone for Bangladesh Knitwear Industry!</h3>
          <p class="z-index font-weight-light text-white tsb-third-text-color">
            When we founded TSB back in 2018, we had a vision to produce the most innovative and iconic knitwears. We wanted to completely change the vibe, increasing sales to foreign markets in exchange for complete customer satisfaction. We
            realized that our passion could transform knitwears into benefit earners for BD RMG.
          </p>
          <a href="about.php#tsbhistory" class="btn tsb-second-background-color white-color white-color-hover tsb-btn-rounded  mt-4 py-2 px-5 position-relative z-index">Know More</a>
        </div>
      </div>

    </div>
  </div>
  <!-- Start Overlay Caption -->

  <!-- Start Team -->
  <div class="container">
    <div class="tsb-team overflow-hidden">
      <h2 class="font-35 font-weight-bold text-center tsb-main-text-color my-4 my-lg-5">Founders</h2>
      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-5 col-lg-4 wow fadeInDown mb-3" data-wow-delay=".9s">
          <div class="card tsb-team-block tsb-second-hover-text-color">
            <div class="image-container shine-effect">
              <a><img class="w-100" src="assets/custom/images/mohiuddin_ahmed_munir.jpg" alt="Mohiuddin Ahmed Munir"></a>
            </div>

            <div class="card-body">
              <h5><a class="font-19 semi-font tsb-main-text-color team-name">Mohiuddin Ahmed Munir</a></h5>
              <p class="font-13 tsb-fifth-text-color italic my-2">Co-Founder</p>
              <ul class="nav tsb-team-social-links">
                <li><a href="tel:+880 1711985473"><span class="tsb-iconphone tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>
                <li><a href="tel:+880 1811189894"><span class="tsb-iconphone tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>
                <li><a href="mailto:munir@tigerstylebd.com" target="_blank"><span class="tsb-iconemail tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 wow fadeInDown mb-3" data-wow-delay="1.2s">
          <div class="card tsb-team-block tsb-second-hover-text-color">
            <div class="image-container shine-effect">
              <a><img class="w-100" src="assets/custom/images/william_amitav_dobey.svg" alt="William Amitav Dobey"></a>
            </div>

            <div class="card-body">
              <h5><a class="font-19 semi-font tsb-main-text-color team-name">William Amitav Dobey</a></h5>
              <p class="font-13 tsb-fifth-text-color italic my-2">Co-Founder</p>
              <ul class="nav tsb-team-social-links">
                <li><a href="mailto:william@tigerstylebd.com"><span class="tsb-iconemail tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

    <div class="container">
    <div class="tsb-team overflow-hidden">
      <h2 class="font-35 font-weight-bold text-center tsb-main-text-color my-4 my-lg-5">Team</h2>
      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-5 col-lg-4 wow fadeInDown mb-3" data-wow-delay=".9s">
          <div class="card tsb-team-block tsb-second-hover-text-color">
            <div class="image-container shine-effect">
              <a><img class="w-100" src="assets/custom/images/rubel_rana.jpg" alt="Rubel Rana"></a>
            </div>

            <div class="card-body">
              <h5><a class="font-19 semi-font tsb-main-text-color team-name">Rubel Rana</a></h5>
              <p class="font-13 tsb-fifth-text-color italic my-2">Director of Sales & Marketing</p>
              <ul class="nav tsb-team-social-links">
                <li><a href="tel:+880 1670273967"><span class="tsb-iconphone tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>

                <li><a href="mailto:rubel@tigerstylebd.com" target="_blank"><span class="tsb-iconemail tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 wow fadeInDown mb-3" data-wow-delay="1.2s">
          <div class="card tsb-team-block tsb-second-hover-text-color">
            <div class="image-container shine-effect">
              <a><img class="w-100" src="assets/custom/images/nazmul_islam.svg" alt="Nazmul Islam"></a>
            </div>

            <div class="card-body">
              <h5><a class="font-19 semi-font tsb-main-text-color team-name">Nazmul Islam</a></h5>
              <p class="font-13 tsb-fifth-text-color italic my-2">Executive Director</p>
              <ul class="nav tsb-team-social-links">
			  <li><a href="tel:+880 1847245553"><span class="tsb-iconphone tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>
                <li><a href="mailto:nazmul@tigerstylebd.com"><span class="tsb-iconemail tsb-forth-text-color tsb-fifth-border-color tsb-team-social-icon"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End Team -->

  <!-- Start Products Slider -->
  <div class="container-fluid my-4 my-md-5">
    <div class="row">
      <div class="col-12 col-lg-2 p-0">
        <div class="text-center tsb-main-background-color tsb-sqr-rotation tsb-second-border-color">
          <div class="text-rotate">
            <h2 class="text-white font-25">Our <br><span class="white-color font-40 bold-font mt-2 d-block">Products</span></h2>
            <p class="tsb-third-text-color mt-4 mb-3 mb-lg-5">
              Have a look at our newly developed products.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-10 p-0">
        <div class="tsb-index-products tsb-after-overlay py-3 py-lg-5 pr-md-4 pl-md-5 bg-rules sm-index-products">
          <div class="container z-index position-relative">
            <div class="row">
              <div class="col-12 col-lg-10 offset-lg-2">
                <div class="owl-carousel owl-theme dots-0 carousel-items-3 circle-nav mt-lg-4 mb-lg-5" id="blog-slider">
                  <div class="card rounded-0 border-light wow fadeIn mb-4 mb-lg-0" data-wow-delay=".4s">
                    <div class="row">
                      <div class="tsb-product-img col-12">
                        <img class="card-img-top rounded-0 w-100" src="assets/custom/images/tsb-product-mens-t-shirt1.jpg" alt="TSB Product">
                        <div class="tsb-img-overlay">
                          <ul class="nav tsb-product-btns">
                            <li><a href="products.php" class="tsb-product-btn"><span class="tsb-iconeye"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                          <a href="products.php" class="tsb-main-text-color tsb-store-product-title tsb-second-hover-color">Men's</a>
                        </h5>
                        <p class="card-text tsb-fifth-text-color tsb-store-product-details mx-3 store-card-text">Men's T-Shirts</p>

                      </div>
                    </div>
                  </div>
                  <div class="card rounded-0 border-light wow fadeIn mb-4 mb-lg-0" data-wow-delay=".4s">
                    <div class="row">
                      <div class="tsb-product-img col-12">
                        <img class="card-img-top rounded-0 w-100" src="assets/custom/images/tsb-product-mens-polo-shirt1.jpg" alt="TSB Product">
                        <div class="tsb-img-overlay">
                          <ul class="nav tsb-product-btns">
                            <li><a href="products.php" class="tsb-product-btn"><span class="tsb-iconeye"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                          <a href="products.php" class="tsb-main-text-color tsb-store-product-title tsb-second-hover-color">Men's</a>
                        </h5>
                        <p class="card-text tsb-fifth-text-color tsb-store-product-details mx-3 store-card-text">Men's Polo Shirts</p>

                      </div>
                    </div>
                  </div>
                  <div class="card rounded-0 border-light wow fadeIn mb-4 mb-lg-0" data-wow-delay=".4s">
                    <div class="row">
                      <div class="tsb-product-img col-12">
                        <img class="card-img-top rounded-0 w-100" src="assets/custom/images/tsb-product-womens-t-shirt1.jpg" alt="TSB Product">
                        <div class="tsb-img-overlay">
                          <ul class="nav tsb-product-btns">
                            <li><a href="products.php" class="tsb-product-btn"><span class="tsb-iconeye"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                          <a href="products.php" class="tsb-main-text-color tsb-store-product-title tsb-second-hover-color">Women's</a>
                        </h5>
                        <p class="card-text tsb-fifth-text-color tsb-store-product-details mx-3 store-card-text">Women's T-Shirts</p>

                      </div>
                    </div>
                  </div>
                  <div class="card rounded-0 border-light wow fadeIn mb-4 mb-lg-0" data-wow-delay=".4s">
                    <div class="row">
                      <div class="tsb-product-img col-12">
                        <img class="card-img-top rounded-0 w-100" src="assets/custom/images/tsb-product-womens-polo-shirt1.jpg" alt="TSB Product">
                        <div class="tsb-img-overlay">
                          <ul class="nav tsb-product-btns">
                            <li><a href="products.php" class="tsb-product-btn"><span class="tsb-iconeye"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                          <a href="products.php" class="tsb-main-text-color tsb-store-product-title tsb-second-hover-color">Women's</a>
                        </h5>
                        <p class="card-text tsb-fifth-text-color tsb-store-product-details mx-3 store-card-text">Women's Polo Shirts</p>

                      </div>
                    </div>
                  </div>
                  <div class="card rounded-0 border-light wow fadeIn mb-4 mb-lg-0" data-wow-delay=".4s">
                    <div class="row">
                      <div class="tsb-product-img col-12">
                        <img class="card-img-top rounded-0 w-100" src="assets/custom/images/tsb-product-kids-t-shirt1.jpg" alt="TSB Product">
                        <div class="tsb-img-overlay">
                          <ul class="nav tsb-product-btns">
                            <li><a href="products.php" class="tsb-product-btn"><span class="tsb-iconeye"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                          <a href="products.php" class="tsb-main-text-color tsb-store-product-title tsb-second-hover-color">Kids</a>
                        </h5>
                        <p class="card-text tsb-fifth-text-color tsb-store-product-details mx-3 store-card-text">Kids T-Shirts</p>

                      </div>
                    </div>
                  </div>
                  <div class="card rounded-0 border-light wow fadeIn mb-4 mb-lg-0" data-wow-delay=".4s">
                    <div class="row">
                      <div class="tsb-product-img col-12">
                        <img class="card-img-top rounded-0 w-100" src="assets/custom/images/tsb-product-kids-polo-shirt1.jpg" alt="TSB Product">
                        <div class="tsb-img-overlay">
                          <ul class="nav tsb-product-btns">
                            <li><a href="products.php" class="tsb-product-btn"><span class="tsb-iconeye"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                          <a href="products.php" class="tsb-main-text-color tsb-store-product-title tsb-second-hover-color">Kids</a>
                        </h5>
                        <p class="card-text tsb-fifth-text-color tsb-store-product-details mx-3 store-card-text">Kids Polo Shirts</p>

                      </div>
                    </div>
                  </div>



                </div>
                <a href="products.php" class="btn white-color font-18 all-index-products tsb-second-hover-color border-0 p-0
                                       position-absolute d-block pt-4 pt-md-0 z-index ">
                  <span class="underline">View All Products</span>
                  <span class="tsb-iconarrow-light ml-2 font-13"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Products Slider -->

  <!-- Start Latest Blog -->
  <div class="container">
    <div class="row overflow-hidden mb-4">
      <div class="col-12">
        <h2 class="font-35 bold-font tsb-second-text-color mb-4 mb-md-5">Latest <span class="tsb-main-text-color">Blog</span></h2>
      </div>
      <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInRight" data-wow-delay=".4s">
        <div class="image-container zoomIn-effect">
          <a href="welcome-to-our-website.php"><img src="assets/custom/images/tsb-blog-welcome-to-our-website-thumb3.jpg" alt="TSB Blog Welcome To Our Website Thumbnail 3" class="w-100"></a>
        </div>
        <h2 class="bold-font font-20 mt-3"><a href="welcome-to-our-website.php" class="tsb-second-text-color tsb-main-hover-color">Welcome to Our New Website!</a></h2>
        <div class="py-2 tsb-fifth-text-color float-left w-100 d-md-none d-lg-block">
          <div class="float-left font-13">
            <span class="tsb-iconcalender"></span> 21 ‎September, 2019
          </div>
          <div class="float-right font-13">
            <span class="tsb-iconnews"></span> Latest News
          </div>
        </div>


        <p class="tsb-forth-text-color font-14 mb-2">
          We are delighted to announce the launch of our freshly designed website! We have been working hard designing and updating our website
        </p>
        <a href="welcome-to-our-website.php" class="btn tsb-second-text-color tsb-main-hover-color p-0">
          <span class="underline">Read More</span>
          <span class="tsb-iconarrow-light ml-2"></span>
        </a>
      </div>
      <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInRight" data-wow-delay=".4s">
        <div class="image-container zoomIn-effect">
          <a href="greetings-from-tsb.php"><img src="assets/custom/images/tsb-blog-greetings-from-tsb-thumb3.jpg" alt="TSB Blog Greetings From TSB Thumbnail 3" class="w-100"></a>
        </div>
        <h2 class="bold-font font-20 mt-3"><a href="greetings-from-tsb.php" class="tsb-second-text-color tsb-main-hover-color">Greetings from TSB!</a></h2>
        <div class="py-2 tsb-fifth-text-color float-left w-100 d-md-none d-lg-block">
          <div class="float-left font-13">
            <span class="tsb-iconcalender"></span> 22 ‎September, 2019
          </div>
          <div class="float-right font-13">
            <span class="tsb-iconnews"></span> Latest News
          </div>
        </div>


        <p class="tsb-forth-text-color font-14 mb-2">
          Greetings from Tiger Style Bangladesh. TSB welcomes you to work with their creative, proactive and inspiring individuals with a passion
        </p>
        <a href="greetings-from-tsb.php" class="btn tsb-second-text-color tsb-main-hover-color p-0">
          <span class="underline">Read More</span>
          <span class="tsb-iconarrow-light ml-2"></span>
        </a>
      </div>
    </div>
  </div>
  <!-- End   Latest Blog -->

  <!-- Start Parteners Slider -->

  <!-- End   Parteners Slider -->

  <!-- Start Footer 2 Background Image  -->
  <div class="tsb-footer-image tsb-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
          <h2 class="font-30 semi-font mb-5">Tiger Style Bangladesh</h2>


          <h2 class="font-30 semi-font mb-3">Newsletter</h2>
          <form method="post" action="form-submit.php">
            <div style="margin-bottom:0.5rem" class="form-group tsb-subscribe-formgroup">
              <input type="text" name="fname" class="form-control tsb-subscribe-input tsb-btn-rouned text-center mb-2" placeholder="First Name" required>
              <input type="text" name="lname" class="form-control tsb-subscribe-input tsb-btn-rouned text-center mb-2" placeholder="Last Name" required>
              <input type="email" name="email" class="form-control tsb-subscribe-input tsb-btn-rouned text-center" placeholder="Email" required>
            </div>
            <button style="position:static" type="submit" name="submit" class="btn tsb-second-background-color tsb-btn-rouned tsb-subscribe-btn">Subscribe</button>
          </form>

        </div>


        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <a class="tsb-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img style="height:38px; border:1px solid #fff" class="p-0" src="assets/custom/images/tsb_logo.svg" alt="TSB Logo" class="tsb-logo"></a>

          <p class="font-15 tsb-third-text-color" style="text-align:justify">
            The seeds for Tiger Style Bangladesh were planted in 2018. We are one of the top knitwear exporters based in Dhaka, Bangladesh. TSB specializes in exporting men’s, women’s and kid's knitwear. Our strength is competitive prices,
            great quality, and strict deadlines. It is our goal to be a leading member of the Bangladesh knitwear industry through excellence in quality, efficiency, innovation, and the customers as well as the satisfaction of employees. Every
            garment exported by TSB provides the highest value. TSB has specialized in exporting organic cotton and fast fashion knitwear for global brands, independent boutiques, and retailers. We offer a full-scale exporting solution
            including a range of services to meet buyer's specifications.
          </p>

        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <h2 class="font-20 semi-font tsb-second-border-color border-bottom pb-3">CONTACT US</h2>
          <div class="my-3">
            <h4 class="font-16 semi-font"><span class="tsb-iconmap-icon tsb-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Address Information</h4>
            <p class="font-14 tsb-fifth-text-color mt-2 ml-4">House#13, Road#08, Sector#11, Uttara, Dhaka-1230, Bangladesh</p>
          </div>
          <div class="my-3">
            <h4 class="font-16 semi-font"><span class="tsb-iconphone tsb-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Call Now </h4>
            <p class="font-14 tsb-fifth-text-color mt-2 ml-4"><a href="tel:+880 1711985473" class="tsb-fifth-text-color" onMouseOver="this.style.color='#99A2AA'"> +880 1711985473</a></p>
            <p class="font-14 tsb-fifth-text-color mt-2 ml-4"><a href="tel:+880 1811189894" class="tsb-fifth-text-color" onMouseOver="this.style.color='#99A2AA'"> +880 1811189894</a></p>
          </div>
          <div class="my-3">
            <h4 class="font-16 semi-font"><span class="tsb-iconemail tsb-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Mail </h4>
            <p class="font-14 tsb-fifth-text-color mt-2 ml-4"><a href="mailto:info@tigerstylebd.com" class="tsb-fifth-text-color" onMouseOver="this.style.color='#99A2AA'"> info@tigerstylebd.com</a></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <h2 class="font-20 semi-font tsb-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE</h2>
          <ul class="nav tsb-footer-links">
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="https://www.tigerstylebd.com:2096/3rdparty/roundcube/index.php" target="_blank">Webmail</a></li>
          </ul>
        </div>

      </div>

    </div>
  </div>
  <div class="copyright tsb-main-background-color mt-0 border-0 white-color">
    <ul class="nav tsb-footer-social-links just-center tsb-light-footer-links">
      <li><a href="https://facebook.com/tigerstylebd/" target="_blank"><i class="fab fa-facebook"></i></a></li>
    </ul>
    <p class="mb-0">Copyright © TSB 2019. All rights reserved. Developed by <a href="https://www.theanasuddin.com/" target="_blank" class="tsb-second-text-color" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#fbb040'">Anas
        Uddin</a></p>

  </div>

  <!-- /End Footer 2 Background Image -->

  <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
  <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
  <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
  <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
  <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
  <script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
  <script src="assets/vendor/timeline/jquery.timelify.js"></script>
  <script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script> <!-- /Added Here -->
  <script src="assets/custom/js/jquery-data-to.js"></script>
  <script src="assets/vendor/jquery-circle-progress/circle.js"></script>
  <script src="assets/vendor/portfolio-filter-gallery/jquery.isotope.min.js"></script>
  <script src="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js"></script> <!-- /To Here -->
  <script src="assets/custom/js/custom.js"></script>


</body>

</html>
