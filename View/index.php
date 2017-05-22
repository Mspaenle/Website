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
    <title> Moys Games </title>
  </head>

  <body class="list-group go-to-top">

    <?php include("nav.php"); ?>

    <div class="center-w">

      <div class="container">

          <header class="jumbotron hero-spacer">
              <h1>Welcome</h1>
              <p>Come here whenever you want to organize a video game tournament with your friends.</p>
              <p><a class="btn btn-primary btn-large" href="newParty.php">Start a tournament</a>
              </p>
          </header>

          <hr>

          <div class="container row">

            <div class="col-lg-6">
        				<div class="container">
        					<div class="display-3">
        						<h2 class="text-muted">Games proposed</h2>
        					</div>

                  <?php
                  while($donnees = $answer->fetch())
                  {
                  ?>
                  <div class="container">
                            <div class="item"><a href="games.php"><img src="<?php echo $donnees['image']; ?>" alt="image" class="img-index"></a></div>
                  </div>
                  <?php
                  }
                  $answer->closeCursor();
                  ?>
        				</div>
             </div>

             <div class="col-lg-6">
               <div class="display-3">
                 <h2 class="text-muted">Top 3</h2>
               </div>

               <table class="table table-hover rankTab">
                 <thead>
                   <tr>
                     <th> Name </th>
                     <th> Score </th>
                   </tr>
                 </thead>

                 <tbody>
                   <?php
                   $j=1;
                   while($j<4)
                   {
                     $donnees2 = $players->fetch();
                     $j=$j+1;
                   ?>
                   <tr>
                     <td><?php echo $donnees2['name']; ?></td>
                     <td><?php echo $donnees2['score']; ?></td>
                   </tr>
                   <?php
                   }
                   $players->closeCursor();
                   ?>
                 </tbody>
               </table>
             </div>

          </div>

          <hr>

        </div>

        <?php include("foot.php"); ?>

      </div>

  </body>
</html>
