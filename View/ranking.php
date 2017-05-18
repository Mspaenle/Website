<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">

    <title> Ranking </title>

  </head>

  <bodyclass="list-group go-to-top">

    <?php include("nav.php"); ?>

    <div class="center-w">

        <div class="page-header">
          <h1 class ="display-3 text-center">Ranking</h1>
        </div>

        <table class="table table-hover rankTab">
          <thead>
            <tr>
              <th> </th>
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
              <td> <?php echo $i; $i++; ?>
              <td> <?php echo $donnees['name']; ?></td>
              <td> <?php echo $donnees['score']; ?></td>
            </tr>
            <?php
            }
            $answer->closeCursor();
            ?>
          </tbody>

        </table>

    </div>

    <?php include("foot.php"); ?>

  </body>
</html>
