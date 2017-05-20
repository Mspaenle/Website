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
          <button type="button" href="admin_add.php" class="btn btn-default">Add a Game</button>
        </div>
        <div class="btn-group" role="group">
          <button href="admin_rm.php" class="btn btn-default">Remove a Game</button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default">Right</button>
        </div>
      </div>
      <div class="container">
        <a href="controller_admin_end.php" class="btn btn-default">Finish</a>
      </div>
    </div>

      <?php include("foot.php"); ?>

  </body>
</html>
