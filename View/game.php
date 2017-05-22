<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
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
        <?php
        while($donnees=$answer->fetch())
        {
        ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="<?php echo $donnees['image'];?>" alt="Game">
            <div class="caption">
              <h3><?php echo $donnees['namegame'];?></h3>
              <p><?php echo $donnees['description'];?></p>
              <p><a href="#" class="btn btn-primary" role="button">More info (to come)</a> <a href="newParty.php" class="btn btn-default" role="button">Play this game</a></p>
            </div>
          </div>
        </div>
        <?php
        }
        $answer->closeCursor();
        ?>
      </div>
    </div>

    <?php include("foot.php"); ?>

  </body>
</html>
