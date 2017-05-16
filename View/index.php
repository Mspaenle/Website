<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/relic/css/heroic-features.css" />

    <!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="View/relic/css/themify-icons.css">
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="View/relic/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="View/relic/css/owl.carousel.min.css">
	<link rel="stylesheet" href="View/relic/css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="View/relic/css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="View/relic/css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="View/relic/css/style.css">



    <script type="text/javascript" src="View/angular.min.js"></script>
    <script type="text/javascript" src="Controller/gamesController.js"></script>
    <title> Moys Games </title>
  </head>

      <body class="list-group" ng-app='Games' ng-controller="GamesController">

      <?php include("nav.php"); ?>

      <div class="container">

          <header class="jumbotron hero-spacer">
              <h1>Welcome</h1>
              <p>Come here whenever you want to organize a video game tournament with your friends.</p>
              <p><a class="btn btn-primary btn-large" href="newParty.php">Start a tournament</a>
              </p>
          </header>

          <hr>

          <div class="row">
              <div class="col-lg-12">
                  <h3>Games proposed</h3>
              </div>
          </div>

          <div class="row text-center" ng-repeat="game in Games.gamesProposed">
              <div class="col-md-3 col-sm-6 hero-feature">
                  <div class="thumbnail">
                      <img src="{{game.image}}" alt="">
                      <div class="caption">
                          <h3>{{game.name}}</h3>
                          <p>{{game.description}}</p>
                          <p>
                              <a href="games.php" class="btn btn-primary">More info</a> <a href="#" class="btn btn-default">More Info</a>
                          </p>
                      </div>
                  </div>
              </div>
            </div>

          <hr>

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
