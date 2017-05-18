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

          <div class="container row">

            <div class="col-lg-6">
        				<div class="container">
        					<div class="display-3">
        						<h2 class="text-muted">Games proposed</h2>
        					</div>

                  <?php
                  while($donnees = $answer->fetch())
                  {
                  ?>
                  <div class="container">
                            <div class="item"><a href="games.php"><img src="<?php echo $donnees['image']; ?>" alt="image" class="col-lg-4" width=30%></a></div>
                  </div>
                  <?php
                  }
                  $answer->closeCursor();
                  ?>
        				</div>
             </div>

             <div class="col-lg-6">
               <div class="display-3">
                 <h2 class="text-muted">Top 3</h2>
               </div>

               <table class="table table-hover rankTab">
                 <thead>
                   <tr>
                     <th> Name </th>
                     <th> Score </th>
                   </tr>
                 </thead>

                 <tbody>
                   <?php

                   $j=1;
                   while($j<4)
                   {
                     $donnees2 = $players->fetch();
                     $j=$j+1;
                   ?>
                   <tr>
                     <td><?php echo $donnees2['name']; ?></td>
                     <td><?php echo $donnees2['score']; ?></td>
                   </tr>
                   <?php
                   }
                   $players->closeCursor();
                   ?>
                 </tbody>
               </table>
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
