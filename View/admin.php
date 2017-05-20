<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Admin log-in </title>
  </head>

  <body>

    <?php include("nav.php"); ?>
<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Log-in as an admin</h1>
    </div>

<div class="center-w">

    <div class="container">
      <form method="post" action="admin_choice.php">
        <label for="partyName" class="col-sm-2 col-form-label">Admin :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="idAdmin" required>
        </div>
        <label for="admin-log-in" class="col-sm-2 col-form-label"> Administrator password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="mdpAdmin" required>
        </div>

        <input type="submit" value="Log-in" class="btn btn-default">
      </form>
    </div>

    <div class="container">
      <?php include("foot.php") ; ?>
    </div>

</div>

  </body>

</html>
