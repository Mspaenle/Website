<!DOCTYPE html>
<html ng-app='Games'>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="/Website/View/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Website/View/bootstrap-3.3.7-dist/css/heroic-features.css" />
    <script type="text/javascript" src="/Website/View/angular.min.js"></script>
    <script src="/Website/Controller/gamesController.js"></script>
    <title> Games </title>
  </head>

  <body class="list-group" ng-controller="GamesController as game">
    <?php include("nav.php"); ?>
    <div class="page-header">
      <h1 class ="display-3 text-center">{{ "Video games proposed"}}</h1>
    </div>

    <div class="list-group-item" ng-repeat="game in Games.gamesProposed">

      <h3>
        {{game.name}}
        <em class="pull-right">{{game.nbPlayer}}</em>
      </h3>
      <section ng-show="product.images.length">
        <img ng-src="{{game.image}}" />
      </section>

      <section class="tab" ng-controller="TabController as tab">
<ul class="nav nav-pills">
  <li ng-class="{ active: tab.isSet(1) }">
    <a href ng-click="tab.setTab(1)">Description</a></li>
  <li ng-class="{ active: tab.isSet(2) }">
    <a href ng-click="tab.setTab(2)">More infos</a></li>
  <li ng-class="{ active: tab.isSet(3) }">
    <a href ng-click="tab.setTab(3)">Play</a></li>
</ul>

<div ng-show="tab.isSet(1)">
  <h4>Description</h4>*
  <blockquote>{{game.description}}</blockquote>
</div>
<div ng-show="tab.isSet(2)">
  <h4>More infos</h4>
  <blockquote>{{game.options}}</blockquote>
</div>
<div ng-show="tab.isSet(3)">
  <h4>Play</h4>
</div>
      </section>
    </div>
  </body>
</html>
