<?php
include 'db_connection.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Search for latest news and articles from Tiger Style Bangladesh.">
  <meta name="author" content="Anas Uddin">
  <link rel="mask-icon" sizes="any" href="assets/custom/images/tsb_logo.svg" color="#10263E">
  <link rel="apple-touch-icon" href="assets/custom/images/apple-touch-icon-192x192.png" sizes="192x192">
  <link rel="fluid-icon" href="assets/custom/images/fluidicon.png" title="Tiger Style Bangladesh">
  <meta http-equiv="Content-Type" content="text/html;">
  <meta http-equiv="Content-Language" content="en-us">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="robots" content="index,follow,noarchive">
  <meta name="googlebot" content="index,follow">
  <meta name="url" content="https://www.tigerstylebd.com/search_articles.php">
  <meta name="keywords" content="Tiger Style Bangladesh, TSB, Official Website, Knitwear, Exporter, Bangladesh RMG, Mohiuddin Ahmed Munir, William Amitav Dobey, Blog, Exporter Exporting Company, T-Shirts, Polo Shirts, Knit Supplier, Dhaka, Bangladesh, Uttara, Garments, Men’s Knitwear, Women’s Knitwear, Kid's Knitwear, Knitwear Manufacturer, Articles, Search, Anas Uddin">
  <link rel="canonical" href="https://www.tigerstylebd.com/search_articles.php" data-pjax-transient>
  <link rel="alternate" hreflang="x-default" href="https://www.tigerstylebd.com/search_articles.php">
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-title" content="Tiger Style Bangladesh" />
  <meta name="apple-mobile-web-app-status-bar-style" content="white" />
  <link rel="search" type="application/opensearchdescription+xml" href="opensearch.xml" title="Tiger Style Bangladesh">
  <meta name="hostname" content="tigerstylebd.com">
  <meta name="expected-hostname" content="tigerstylebd.com">
  <meta name="selected-link" value="/search_articles.php" data-pjax-transient>

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

  <meta itemprop="name" content="Blog - Tiger Style Bangladesh">
  <meta itemprop="description" content="Search for latest news and articles from Tiger Style Bangladesh.">
  <meta itemprop="image" content="https://www.tigerstylebd.com/assets/custom/images/meta-image.jpg">

  <meta property="og:site_name" content="Tiger Style Bangladesh" />
  <meta property="og:url" content="https://www.tigerstylebd.com/search_articles.php">
  <meta property="og:title" content="Blog - Tiger Style Bangladesh">
  <meta property="og:description" content="Search for latest news and articles from Tiger Style Bangladesh.">
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
  <meta property="twitter:title" content="Blog - Tiger Style Bangladesh">
  <meta property="twitter:description" content="Search for latest news and articles from Tiger Style Bangladesh.">
  <meta property="twitter:image:src" content="https://www.tigerstylebd.com/assets/custom/images/tsb-logo.jpg">
  <meta property="twitter:image:width" content="4096">
  <meta property="twitter:image:height" content="4096">
  <meta property="twitter:image:alt" content="TSB Logo">
  <meta name="twitter:url" content="https://www.tigerstylebd.com/search_articles.php">
  <meta name="twitter:domain" content="tigerstylebd.com"/>

    <title>Blog - Tiger Style Bangladesh</title>

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
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- tsb CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- tsb CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">

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
<div class="tsb-header tsb-after-overlay">
    <div class="container">
      <h2 class="tsb-page-title tsb-second-border-color">Blog</h2>
    </div>
  </div>
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="tsb-light-gary-background">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="tsb-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="index.php" class="tsb-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
    </div>
</div>
<!-- /End Breadcrumbs -->

<!-- Start page content -->
<?php
$mysqli = mysqli_connect('localhost', 'tigerstylebd', 'tsbl1971', 'tigerstylebd');

$query = "SELECT * FROM `tsb_user_comments`";

if ($result=mysqli_query($mysqli,$query))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  }

?>
<?php
$mysqli = mysqli_connect('localhost', 'tigerstylebd', 'tsbl1971', 'tigerstylebd');

$query3 = "SELECT * FROM `tsb_user_comments2`";

if ($result3=mysqli_query($mysqli,$query3))
                         {
                         // Return the number of rows in result set
                         $rowcount3=mysqli_num_rows($result3);
                         }

?>

<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-lg-8">

			  <?php
include 'db_connection.php';
 ?>
 <?php $keyword1 = mysqli_real_escape_string($mysqli, $_POST['keyword']); ?>
 <h1 style="display:inline" class="tsb-main-text-color font-35 bold-font mb-3">Search Results For: </h1>
 <span class="tsb-second-text-color font-35 bold-font"><?php echo " ".$keyword1.""; ?></span>
 <div class="article-container">

   <?php
if (isset($_POST['submit-keyword'])) {
  $keyword = mysqli_real_escape_string($mysqli, $_POST['keyword']);
  $sql = "SELECT * FROM `article` WHERE title LIKE '%$keyword%' OR text LIKE '%$keyword%' OR
author LIKE '%$keyword%' OR date LIKE '%$keyword%'";
$result4 = mysqli_query($mysqli, $sql);
$queryResult = mysqli_num_rows($result4);

if ($queryResult != 0 && $queryResult != 1) {


  echo '<p class="tsb-forth-text-color my-4">'.$queryResult.' results</p>';

}
elseif ($queryResult == 1) {


  echo '<p class="tsb-forth-text-color my-4">'.$queryResult.' result</p>';

}


if ($queryResult > 0) {
  while ($row = mysqli_fetch_assoc($result4)) {
    if ($row['title'] == "Welcome to Our New Website!") {
      $articleLink = "welcome-to-our-website.php";
    }
    elseif ($row['title'] == "Greetings from TSB!") {
      $articleLink = "greetings-from-tsb.php";
    }

echo
    '
        <div class=" wow fadeIn" data-wow-delay=".3s">
    <h2 class="mt-3 mb-2 font-18 semi-font"><a href="'.$articleLink.'" class="tsb-main-text-color tsb-second-hover-color">'.$row['title'].'</a></h2>
    <div class="tsb-forth-text-color font-14 mb-2">
        <span class="tsb-icondata tsb-second-text-color mr-1"></span>
        <span class="mr-3"> '.$row['date'].' </span>
    </div>
    <p class="tsb-forth-text-color font-14 mb-2">
        '.substr($row['text'],0,262).'
        <span></span>
        <a class="tsb-second-text-color tsb-second-hover-color" href="'.$articleLink.'">more...</a>
    </p>


    <span class="tsb-fifth-text-color font-14">Posted By</span>
    <a target="_blank" href="https://www.theanasuddin.com/" class="tsb-fifth-text-color tsb-second-hover-color font-15 bold-font ml-1">'.$row['author'].'</a>

    <hr>
    </div>
    ';


  }
}
else {
  echo '<p class="tsb-forth-text-color my-4">Sorry!, but nothing matched your search terms. Please try again with some different keywords.</p>';
}

}
    ?>

 </div>

          </div>
          <div class="col-12 col-lg-4">
              <div class="tsb-blog-search">
                  <form action="search_articles.php" method="post">
                      <div class="row">
                         <div class="col-12 col-sm-9 col-md-8 mb-3 mb-md-0">
                             <div class="input-icon">
                                 <input type="text" name="keyword" class="form-control rounded-0 py-2 width-100 font-14" placeholder="Search Articles ...">
                             </div>
                         </div>
                         <div class="col-12 col-sm-3 col-md-4 pl-md-0">
                             <button type="submit" name="submit-keyword" class="btn tsb-second-background-color rounded-0 text-white font-15 semi-font py-2 btn-block">Search</button>
                         </div>
                      </div>

                    </form>
              </div>
              <div class="mt-4">
                  <h2 class="position-relative font-23 semi-font tsb-blog-category-head tsb-main-text-color tsb-second-before pl-3 mb-4">Categories</h2>
                  <ul style="text-decoration:underline" class="nav tsb-blog-cat-list tsb-forth-text-color tsb-second-hover-color-link">
                      <li><a href="blog.php">All</a></li>
                      <li><a>Insights</a></li>
                      <li><a>Investing Strategy</a></li>
                      <li><a>Market</a></li>
                      <li><a>Sell</a></li>
                      <li><a>Achievements</a></li>
                      <li><a>Events</a></li>
                  </ul>
                  <hr>
              </div>
              <div class="mt-4">
                  <h2 class="position-relative font-23 semi-font tsb-blog-category-head tsb-main-text-color tsb-second-before pl-3 mb-4">Recent Posts</h2>
                  <div class="row mb-4">
                      <div class="col-4">
                          <a><img src="assets/custom/images/tsb-blog-welcome-to-our-website-thumb2.jpg" alt="TSB Blog Welcome to Our Website Thumbnail 2" class="w-100"></a>
                      </div>
                      <div class="col-8 pl-0">
                          <a href="welcome-to-our-website.php" class="tsb-main-text-color bold-font tsb-second-hover-color">Welcome to Our New Website!</a>
                         <p class="tsb-forth-text-color tsb-blog-date-cat font-14 mt-1">21 ‎September, 2019</p>
                      </div>
                  </div>
                  <div class="row mb-4">
                      <div class="col-4">
                          <a><img src="assets/custom/images/tsb-blog-greetings-from-tsb-thumb2.jpg" alt="TSB Blog Greetings From TSB Thumbnail 2" class="w-100"></a>
                      </div>
                      <div class="col-8 pl-0">
                          <a href="greetings-from-tsb.php" class="tsb-main-text-color bold-font tsb-second-hover-color">Greetings From TSB!</a>
                         <p class="tsb-forth-text-color tsb-blog-date-cat font-14 mt-1">22 ‎September, 2019</p>
                      </div>
                  </div>
                   <hr>
              </div>
              <div class="mt-4">
                  <h2 class="position-relative font-23 semi-font tsb-blog-category-head tsb-main-text-color tsb-second-before pl-3 mb-4">Tags</h2>
                  <ul style="text-decoration:underline" class="nav tsb-blog-cat-list tsb-forth-text-color tsb-second-hover-color-link tsb-blog-cat-tags">
                      <li><a>Website</a></li>
                      <li><a>New</a></li>
                      <li><a>Official</a></li>
                      <li><a>TSB</a></li>
                      <li><a>Clients</a></li>
                      <li><a>Random</a></li>
                  </ul>
              </div>
          </div>
     </div>
</div>
<!-- /End page content -->

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
          The seeds for Tiger Style Bangladesh were planted in 2018. We are one of the top knitwear exporters based in Dhaka, Bangladesh. TSB specializes in exporting men’s, women’s and kid's knitwear. Our strength is competitive prices, great quality, and strict deadlines. It is our goal to be a leading member of the Bangladesh knitwear industry through excellence in quality, efficiency, innovation, and the customers as well as the satisfaction of employees. Every garment exported by TSB provides the highest value. TSB has specialized in exporting organic cotton and fast fashion knitwear for global brands, independent boutiques, and retailers. We offer a full-scale exporting solution including a range of services to meet buyer's specifications.
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
  <p class="mb-0">Copyright © TSB 2019. All rights reserved. Developed by <a href="https://www.theanasuddin.com/" target="_blank" class="tsb-second-text-color" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#fbb040'">Anas Uddin</a></p>

</div>

<!-- /End Footer 2 Background Image -->


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>

</body>
</html>
