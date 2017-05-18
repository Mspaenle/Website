<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<!-- Themify Icons -->
  	<link rel="stylesheet" href="View/css/themify-icons.css">
  	<!-- Bootstrap -->
  	<link rel="stylesheet" href="View/css/bootstrap.min.css">
  	<!-- Owl Carousel -->
  	<link rel="stylesheet" href="View/css/owl.carousel.min.css">
  	<link rel="stylesheet" href="View/css/owl.theme.default.min.css">

  	<!-- FontAwesome Icons -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  	<!-- Magnific Popup -->
  	<link rel="stylesheet" href="View/css/magnific-popup.css">
  	<!-- Easy Responsive Tabs -->
  	<link rel="stylesheet" href="View/css/easy-responsive-tabs.css">
  	<!-- Theme Style -->
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Games </title>
  </head>

  <body class="list-group">

    <?php include("nav.php"); ?>
<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Video games proposed</h1>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="owl-carousel owl-carousel-fullwidth" ng-repeat="game in Games.gamesProposed">
          <div class=" hero-feature col-md-3 col-sm-6 ">
              <div class="thumbnail item">
                  <img src="{{game.image}}" alt="">
                  <div class="caption">
                      <h3>{{game.name}}</h3>
                      <img  src="{{game.image}}">
                      <p>{{game.description}}</p>
                      <p>
                          <a href="games.php" class="btn btn-primary">More info</a> <a href="#" class="btn btn-default">More Info</a>
                      </p>
                  </div>
              </div>
          </div>

        </div>
      </div>
    </div>
    
</div>
<div class="container">
    <?php include("foot.php"); ?>
</div>

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
