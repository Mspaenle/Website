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
    <title> Party Engaged </title>
  </head>

  <body>

    <?php include("nav.php"); ?>
<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Party <?php echo $Party;?></h1>
    </div>
<form cible="current_party.php">
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th > Number </th>
    			<th> Name </th>
    			<th> Current score </th>
    			<th> New score </th>
    		</tr>
    	</thead>

    	<tbody>
    		<?php


    		while($donnees = $answer->fetch())
    		{
    		?>
    		<tr>
    			 <td> <?php echo $donnees['number']; ?></td>
    			<td> <?php echo $donnees['name']; ?></td>
    			<td> <?php echo $donnees['scoreP']; ?></td>
          <?php $i=$donnees['number']; ?>
    			<td> <input type="text" name="score<?php $donnees['number']; ?>" value =<?php $donnees['number']; ?>> </td>
    		</tr>
    		<?php
    		}
    		$answer->closeCursor();
    		?>

    </table>

    <input type="submit" value="Update" class="btn btn-default">
</form>

 <a href="stats.php" class="btn btn-default">Finish</a>


    <div class="container">
      <?php include("foot.php")?>
    </div>
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
