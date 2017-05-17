<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/relic/css/heroic-features.css" />
  	<!-- Bootstrap -->
  	<link rel="stylesheet" href="View/relic/css/bootstrap.min.css">
  	<!-- Owl Carousel -->
  	<link rel="stylesheet" href="View/relic/css/owl.carousel.min.css">
  	<link rel="stylesheet" href="View/relic/css/owl.theme.default.min.css">
  	<!-- Easy Responsive Tabs -->
  	<link rel="stylesheet" href="View/relic/css/easy-responsive-tabs.css">
  	<link rel="stylesheet" href="View/style.css">
    <script type="text/javascript" src="View/js/playerTable.js"></script>
    <title> Players </title>

  </head>

  <body>

    <?php include("nav.php"); ?>

    <div class="page-header">
      <h1 class ="display-3 text-center">Players <?php echo $_POST['nbPlayers']; ?></h1>
    </div>

<form action="ResultForm.php">
<div class="container">
  <table border="1" id="players" classe="table table-hover">
              <tr>
                  <th>Nom Joueur</th>
                  <th>Numéro Joueur</th>
              </tr>
              <tbody  >
                  <tr >
                      <td  >
                          <input type="text" name="Designation">
                      </td>
                      <td>
                          <input type="text" name="Serie">
                      </td>
                      <td>
                        <?php $i = $nbPlayers; ?>
                        <?php while($i>0){?>
                          <input type="button" id="add_players()" onClick="addKid()" value="+" />
                          <?php $i--;?>
                      </td>
                  </tr>
              </tbody>
          </table>
          <input type="submit" value="Submit" class="btn btn-default">
        </div>
 </form>

    <div class="container">
      <?php include("foot.php")?>
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
