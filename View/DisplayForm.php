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

    <title> Players </title>

    <script type="text/javascript">

                var i = 0;

                function addPlayer(j,bool)
                {
                    if(!bool){
                      if (i < j-1 )
                      {
                          var newRow = document.createElement('tr');

                          newRow.innerHTML = '<td> <input type="text" name="PlayerName_'+i+'" ><td> <input type="text" name="PlayerNumber_'+i+'" ></td>';

                          document.getElementById('players').appendChild(newRow);
                          i++;
                      }
                    }
                    else{
                      if (i < j-1 )
                      {
                          var newRow = document.createElement('tr');

                          newRow.innerHTML = '<td> <input type="text" name="PlayerName_'+i+'" ><td> <input type="text" name="PlayerNumber_'+i+'" ></td><td> <input type="text" name="PlayerTeam_'+i+'"></td>';

                          document.getElementById('players').appendChild(newRow);
                          i++;
                      }
                    }
                }

                function removePlayer(element)
                {
                    document.getElementById('players').removeChild(element.parentNode);
                    i--;
                }

      </script>




  </head>

  <body>

    <?php include("nav.php"); ?>
<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Players</h1>
    </div>

<div class="container">
<form action="ResultForm.php" method="post">

  <table border="1" id="players" classe="tablePlayer col-ls-6 col-md-8 col-sm-12">
              <tr>
                  <th>Name</th>
                  <th>Number</th>
                  <?php if($Team){?><th>Team Number</th><?php }?>
              </tr>
              <tbody>
                  <tr>
                      <td>
                          <input type="text" name="Designation">
                      </td>
                      <td>
                          <input type="text" name="Serie">
                      </td>
                      <?php if($Team){?><td><input type="text" name="TeamNumber"></td><?php }?>
                      <td>
                        <?php $i = $nbPlayers; ?>
                          <input type="button" id="add_players()" onClick="addPlayer(<?php echo $i;?>,<?php echo $Team;?>)" value="+" />

                      </td>
                  </tr>
              </tbody>
          </table>
          <input type="submit" value="Submit" class="btn btn-default">
 </form>
 </div>
</div>
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
