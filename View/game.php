<!DOCTYPE html>
<html ng-app='Games'>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/relic/css/heroic-features.css" />

	<!-- Themify Icons -->
	<link rel="stylesheet" href="View/relic/css/themify-icons.css">
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="View/relic/css/bootstrap.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="View/relic/css/owl.carousel.min.css">
	<link rel="stylesheet" href="View/relic/css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="View/relic/css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="View/relic/css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="View/relic/css/style.css">

    <script type="text/javascript" src="View/angular.min.js"></script>
    <script type="text/javascript" src="Controller/gamesController.js"></script>
    <title> Games </title>
  </head>

  <body class="list-group" ng-controller="GamesController">

    <?php include("nav.php"); ?>

    <div class="page-header">
      <h1 class ="display-3 text-center">{{ "Video games proposed"}}</h1>
    </div>
<div class="container">
    <div class="list-group-item" ng-repeat="game in Games.gamesProposed">
      <h3>
        {{game.name}}
        <em class="pull-right">{{game.nbPlayer}}</em>
      </h3>
      <section ng-show="game.image">
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
    <?php include("foot.php"); ?>
  </div>



  		<!-- jQuery -->
  		<script src="View/relic/js/jquery-1.10.2.min.js"></script>
  		<!-- jQuery Easing -->
  		<script src="View/relic/js/jquery.easing.1.3.js"></script>
  		<!-- Bootstrap -->
  		<script src="View/relic/js/bootstrap.js"></script>
  		<!-- Owl carousel -->
  		<script src="View/relic/js/owl.carousel.min.js"></script>
  		<!-- Magnific Popup -->
  		<script src="View/relic/js/jquery.magnific-popup.min.js"></script>
  		<!-- Easy Responsive Tabs -->
  		<script src="View/relic/js/easyResponsiveTabs.js"></script>
  		<!-- FastClick for Mobile/Tablets -->
  		<script src="View/relic/js/fastclick.js"></script>
  		<!-- Velocity -->
  		<script src="View/relic/js/velocity.min.js"></script>
  		<!-- Main JS -->
  		<script src="View/relic/js/main.js"></script>

    </body>

    </html>
