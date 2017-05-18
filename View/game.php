<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Games </title>
  </head>

  <body class="list-group">

    <?php include("nav.php"); ?>
<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Video games proposed</h1>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="owl-carousel owl-carousel-fullwidth" ng-repeat="game in Games.gamesProposed">
          <div class=" hero-feature col-md-3 col-sm-6 ">
              <div class="thumbnail item">
                  <img src="{{game.image}}" alt="">
                  <div class="caption">
                      <h3>{{game.name}}</h3>
                      <img  src="{{game.image}}">
                      <p>{{game.description}}</p>
                      <p>
                          <a href="games.php" class="btn btn-primary">More info</a> <a href="#" class="btn btn-default">More Info</a>
                      </p>
                  </div>
              </div>
          </div>

        </div>
      </div>
    </div>

</div>
<div class="container">
    <?php include("foot.php"); ?>
</div>
    </body>

    </html>
