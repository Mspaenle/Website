<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/heroic-features.css" />
    <script type="text/javascript" src="View/angular.min.js"></script>
    <title> Moys Games </title>
  </head>

<script>

var app = angular.module('Games', []);
app.controller('GamesController', function(){
  $scope.gamesProposed =[
    {
      name: 'Fifa17',
      description: "FIFA, also known as FIFA Football or FIFA Soccer, is a series of association football video games or football simulator, released annually by Electronic Arts under the EA Sports label. While there was no major competition when EA released the first titles in their Madden NFL and NHL series, football video games such as Sensible Soccer, Kick Off and Match Day had been developed since the late 1980s and already competitive in the games market when EA Sports announced a football game as the next addition to their EA Sports label.",
      nbPlayer: 4,
      options: ["Individually", "by Team"],
      image: "images/Fifa17.jpeg"
    },
    {
      name: 'Mario Kart',
      description: "Mario Kart (マリオカート Mario Kāto?) is a series of go-kart-style racing video games developed and published by Nintendo as spin-offs from its trademark Super Mario series. The first in the series, Super Mario Kart, was launched in 1992 on the Super Nintendo Entertainment System to critical and commercial success.",
      nbPlayer: 4,
      options: ["Individually", "by Team"],
      image: "images/MarioKart.jpeg"
    },
    {
      name: 'Mario Kart',
      description: "Mario Kart (マリオカート Mario Kāto?) is a series of go-kart-style racing video games developed and published by Nintendo as spin-offs from its trademark Super Mario series. The first in the series, Super Mario Kart, was launched in 1992 on the Super Nintendo Entertainment System to critical and commercial success.",
      nbPlayer: 4,
      options: ["Individually", "by Team"],
      image: "images/MarioParty.jpeg"
    }];
});

</script>





    <body class="list-group" ng-app='Games' ng-controller="GamesController">

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

          <div class="row text-center" ng-repeat="game in Games.gamesProposed">
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
