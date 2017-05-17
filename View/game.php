<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/relic/css/heroic-features.css" />
  	<!-- Themify Icons -->
  	<link rel="stylesheet" href="View/relic/css/themify-icons.css">
  	<!-- FontAwesome Icons -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  	<!-- Bootstrap -->
  	<link rel="stylesheet" href="View/relic/css/bootstrap.min.css">
  	<!-- Owl Carousel -->
  	<link rel="stylesheet" href="View/relic/css/owl.carousel.min.css">
  	<link rel="stylesheet" href="View/relic/css/owl.theme.default.min.css">
  	<!-- Magnific Popup -->
  	<link rel="stylesheet" href="View/relic/css/magnific-popup.css">
  	<!-- Easy Responsive Tabs -->
  	<link rel="stylesheet" href="View/relic/css/easy-responsive-tabs.css">
  	<!-- Theme Style -->
  	<link rel="stylesheet" href="View/relic/css/style.css">
    <title> Games </title>
  </head>

  <body class="list-group">

    <?php include("nav.php"); ?>

    <div class="page-header">
      <h1 class ="display-3 text-center">Video games proposed</h1>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-carousel-fullwidth">
            <div class="item"><img src="{{Games.images[0]}}" alt="image"></div>
            <div class="item"><img src="{{Games.images[1]}}" alt="image"></div>
            <div class="item"><img src="{{Games.images[2]}}" alt="image"></div>
        </div>
      </div>
    </div>


    <?php include("foot.php"); ?>


  		<!-- jQuery -->
  		<script src="View/relic/js/jquery-1.10.2.min.js"></script>
  		<!-- jQuery Easing -->
  		<script src="View/relic/js/jquery.easing.1.3.js"></script>
  		<!-- Bootstrap -->
  		<script src="View/relic/js/bootstrap.js"></script>
  		<!-- Owl carousel -->
  		<script src="View/relic/js/owl.carousel.min.js"></script>
  		<!-- Magnific Popup -->
  		<script src="View/relic/js/jquery.magnific-popup.min.js"></script>
  		<!-- Easy Responsive Tabs -->
  		<script src="View/relic/js/easyResponsiveTabs.js"></script>
  		<!-- FastClick for Mobile/Tablets -->
  		<script src="View/relic/js/fastclick.js"></script>
  		<!-- Velocity -->
  		<script src="View/relic/js/velocity.min.js"></script>
  		<!-- Main JS -->
  		<script src="View/relic/js/main.js"></script>

    </body>

    </html>
