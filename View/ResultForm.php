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
        <h1 class ="display-3 text-center">Party <?php echo $nameParty;?></h1>
      </div>

      <form action = "current-party" method="post">
        <table class="table table-hover rankTab">
          <thead>
            <tr>
              <th> Name </th>
              <th> Current score </th>
              <th> New points </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($donnees = $answer->fetch())
            {
            ?>
            <tr>
              <td> <?php echo $donnees['name']; ?></td>
              <td> <?php echo $donnees['scoreparty']; ?></td>
              <td> <input type="text" name="<?php echo $donnees['idplayer']; ?>" value=""<?php if(!empty($_POST[$donnees['idplayer']])){ echo htmlspecialchars($_POST[$donnees['idplayer']], ENT_QUOTES);}"" ?>> </td>
            </tr>
            <?php
            }
            $answer->closeCursor();
            ?>
          </tbody>
        </table>
        <input type="submit" value="Update" class="btn btn-default">
      </form>

      <a href="result" class="btn btn-default">Finish</a>

    </div>

      <?php include("foot.php"); ?>

  </body>
</html>
