<!DOCTYPE html>
<html ng-app='videoGames'>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/heroic-features.css" />
    <script type="text/javascript" src="View/angular.min.js"></script>
    <script src="Controller/gamesController.js"></script>
    <title> Moys Games </title>
  </head>

    <body class="list-group" ng-controller="GamesController as game">

      <?php include("nav.php"); ?>

      <div class="container">

          <header class="jumbotron hero-spacer">
              <h1>Welcome</h1>
              <p>Come here whenever you want to organize a video game tournament with your friends.</p>
              <p><a class="btn btn-primary btn-large" href="newParty.php">Start a tournament</a>
              </p>
          </header>

          <hr>

          <div class="row">
              <div class="col-lg-12">
                  <h3>Games proposed</h3>
              </div>
          </div>

          <div class="row text-center" ng-repeat="game in Games.game">
              <div class="col-md-3 col-sm-6 hero-feature">
                  <div class="thumbnail">
                      <img src="{{game.image}}" alt="">
                      <div class="caption">
                          <h3>{{game.name}}</h3>
                          <p>{{game.description}}</p>
                          <p>
                              <a href="games.php" class="btn btn-primary">More info</a> <a href="#" class="btn btn-default">More Info</a>
                          </p>
                      </div>
                  </div>
              </div>
            </div>

          <hr>

          <?php include("foot.php"); ?>

      </div>

      <script src="/Website/View/bootstrap-3.3.7-dist/js/jquery.js"></script>


  </body>

  </html>
