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
    <title> Party Engaged </title>
  </head>

  <body>

    <?php include("nav.php"); ?>
    <div class="center-w">
      <div class="page-header">
        <h1 class ="display-3 text-center">Who won ? </h1>
        <h2 class ="display-2 text-center">Party <?php echo $nameParty;?></h2>
      </div>

        <table class="table table-hover rankTab">
          <thead>
            <tr>
              <th> Rank </th>
              <th> Name </th>
              <th> Score </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            while($donnees = $answer->fetch())
            {
            ?>
            <tr>
              <td> <?php echo $i; ?>
              <td> <?php echo $donnees['name']; ?></td>
              <td> <?php echo $donnees['scoreparty']; ?></td>
            </tr>
            <?php
            $i++;
            }
            $answer->closeCursor();
            ?>
          </tbody>
        </table>

      <a href="home" class="btn btn-default">Home</a>

    </div>

      <?php include("foot.php"); ?>

  </body>
</html>
