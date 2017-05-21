<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
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
          <a href="admin_add.php" class="btn btn-primary" role="button">Add a Game</a>
        </div>
        <div class="btn-group" role="group">
          <a href="admin_rm.php" class="btn btn-primary" role="button">Remove a Game</a>
        </div>
      </div>
      <div class="container">
        <a href="admin_end.php" class="btn btn-default">Finish</a>
      </div>
    </div>

      <?php include("foot.php"); ?>

  </body>
</html>
