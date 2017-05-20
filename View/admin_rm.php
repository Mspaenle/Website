<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
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

      <form method="post" action="controller_rm_game.php">
        <label class="col-sm-2 col-form-label">Game :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="game" required>
        </div>
        <label class="col-sm-2 col-form-label">Administrator password :</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="mdpAdmin" required>
        </div>

        <input type="submit" value="Confirm" class="btn btn-default">
      </form>

      <?php include("foot.php"); ?>

  </body>
</html>
