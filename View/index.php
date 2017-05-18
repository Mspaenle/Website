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
  	<!-- Magnific Popup -->
  	<link rel="stylesheet" href="View/css/magnific-popup.css">
  	<!-- Easy Responsive Tabs -->
  	<link rel="stylesheet" href="View/css/easy-responsive-tabs.css">
  	<!-- Theme Style -->
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Moys Games </title>
  </head>

      <body class="list-group go-to-top">

      <?php include("nav.php"); ?>
<div class="center-w">
      <div class="container">



          <header class="jumbotron hero-spacer">
              <h1>Welcome</h1>
              <p>Come here whenever you want to organize a video game tournament with your friends.</p>
              <p><a class="btn btn-primary btn-large" href="newParty.php">Start a tournament</a>
              </p>
          </header>

          <hr>


<!-- Afficher les images des jeux -->
            <div id="js-fh5co-slider">
      				<div class="container">
      					<div class="fh5co-section-heading">
      						<h2 class="text-muted">Games proposed</h2>
      					</div>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel owl-carousel-fullwidth">
                        <?php

                        $i=1;
                        while($donnees = $answer->fetch())
                        {
                        ?>
                          <div class="item col-sm-8 col-md-12 col-lg-12"><img src="<?php echo $donnees['image']; ?>" alt="image"></div>
                        <?php
                        }
                        $answer->closeCursor();
                        ?>
                      </div>
                    </div>
                  </div>
                </div>


      				</div>
      			</div>
          <hr>

        </div>

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
