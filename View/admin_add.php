<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Admin - Add a game </title>
  </head>

  <body>

    <?php include("nav.php"); ?>

    <div class="center-w">
      <div class="page-header">
        <h1 class ="display-3 text-center">Admin</h1>
        <h2 class ="display-2 text-center">Add a game</h2>
      </div>

      <div class ="container">
        <form action="add_game.php" method="post">
          <div class ="form-group row">
            <label for="gameName" class="col-sm-2 col-form-label">Game :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nameGame" required>
            </div>
          </div>

          <div class ="form-group row">
            <label for="gameDescr"  class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="descr" required>
            </div>
          </div>


          <div class ="form-group row">
            <label for="imageGame" class="col-sm-2 col-form-label">Image (URL) :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="urlImage" required>
            </div>
          </div>

          <hr>

          <label class="col-sm-2 col-form-label">Administrator password :</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="mdpAdmin" required>
          </div>

          <div class="container">
            <input type="submit" value="Submit" class="btn btn-default">
          </div>

        </form>
      </div>

      <?php include("foot.php"); ?>

  </body>
</html>
