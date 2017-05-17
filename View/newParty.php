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
    <title> Start a new tournament </title>
  </head>

  <body>

    <?php include("nav.php"); ?>

    <div class="page-header">
      <h1 class ="display-3 text-center">Start a new party</h1>
    </div>

    <div class ="container">
      <form action="DisplayForm.php">
        <div class ="form-group row">
          <label for="partyName" class="col-sm-2 col-form-label">Party :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pName" placeholder="Amy's Bday" required ng-minlength="2" ng-maxlength="20">
          </div>
        </div>

        <div class ="form-group row">
          <label for="game"  class="col-sm-2 col-form-label">Which game do you want to play ?</label>
          <div class="col-sm-10">
            <select id="game" class="form-control">
              <option value="fifa17">Fifa 17</option>
              <option value="marioParty">Mario Party</option>
              <option value="marioKart">Mario Kart</option>
            </select>
          </div>
        </div>


          <div class ="form-group row">
            <label for="numberPlayers" class="col-sm-2 col-form-label" ng-model="number">Number of players :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nbPlayers" placeholder="From 2 to 16">
            </div>
          </div>
<hr>
        <fieldset class="form-group row">
          <label class="col-sm-2 col-form-label">Type of party</label>
          <div class ="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="typeParty" id="solo" value="solo">
              Individual
            </label>
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="typeParty" id="team" value="team">
              By Team
            </label>
          </div>
        </fieldset>
        <input type="submit" value="Submit" class="btn btn-default">
      </form>
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
