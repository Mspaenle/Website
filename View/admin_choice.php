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
    <title> Admin </title>
  </head>

  <body>

    <?php include("nav.php"); ?>

    <div class="center-w">
      <div class="page-header">
        <h1 class ="display-3 text-center">Admin</h1>
      </div>

      <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
          <a href="admin-add-game" class="btn btn-primary" role="button">Add a Game</a>
        </div>
        <div class="btn-group" role="group">
          <a href="admin-rm-game" class="btn btn-primary" role="button">Remove a Game</a>
        </div>
      </div>
      <div class="container">
        <a href="admin-end" class="btn btn-default">Finish</a>
      </div>
    </div>

      <?php include("foot.php"); ?>

  </body>
</html>
