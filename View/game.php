<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/styleM.css">
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
              <p><a href="games/<?php echo $donnees['idgame'] ?>" class="btn btn-primary" role="button">More infos</a><a href="form-new-party-1" class="btn btn-default" role="button">Play this game</a></p>
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
