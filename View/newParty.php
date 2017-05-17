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
    <title> Start a new tournament </title>
  </head>

  <body>

    <?php include("nav.php"); ?>

<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Start a new party</h1>
    </div>

    <div class ="container">
      <form action="DisplayForm.php" method="post">
        <div class ="form-group row">
          <label for="partyName" class="col-sm-2 col-form-label">Party :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pName" placeholder="Amy's Bday" required>
          </div>
        </div>

        <div class ="form-group row">
          <label for="game"  class="col-sm-2 col-form-label">Which game do you want to play ?</label>
          <div class="col-sm-10">
            <select name="game" class="form-control" required>
              <option value="fifa17">Fifa 17</option>
              <option value="marioParty">Mario Party</option>
              <option value="marioKart">Mario Kart</option>
            </select>
          </div>
        </div>


          <div class ="form-group row">
            <label for="numberPlayers" class="col-sm-2 col-form-label">Number of players :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nbPlayers" placeholder="From 2 to 16" required>
            </div>
          </div>
<hr>
        <fieldset class="form-group row">
          <label class="col-sm-2 col-form-label">Type of party</label>
          <div class ="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="typeParty" id="solo" value="0" class="group-required">
              Individual
            </label>
            <label class="form-check-label ">
              <input class="form-check-input" type="radio" name="typeParty" id="team" value="1" class="group-required">
              By Team
            </label>
          </div>
        </fieldset>
        <input type="submit" value="Submit" class="btn btn-default">
      </form>
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
