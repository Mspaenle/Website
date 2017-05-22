<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Admin - Remove a game </title>
  </head>

  <body>

    <?php include("nav.php"); ?>

    <div class="center-w">
      <div class="page-header">
        <h1 class ="display-3 text-center">Admin</h1>
        <h2 class ="display-2 text-center">Remove a game</h2>
      </div>

      <form method="post" action="rm_game.php">
        <label class="col-sm-2 col-form-label">Game :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="game" value=""<?php if(!empty($_POST['game'])){ echo htmlspecialchars($_POST['game'], ENT_QUOTES);}"" ?>required>
        </div>
        <label class="col-sm-2 col-form-label">Administrator password :</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="mdpAdmin" value=""<?php if(!empty($_POST['mdpAdmin'])){ echo htmlspecialchars($_POST['mdpAdmin'], ENT_QUOTES);}"" ?> required>
        </div>

        <input type="submit" value="Confirm" class="btn btn-default">
      </form>

      <?php include("foot.php"); ?>

  </body>
</html>
