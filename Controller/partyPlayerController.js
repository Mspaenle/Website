(function() {
  var app = angular.module('GamesPlayers', []);
  app.controller('PlayersController', function(){
    this.Players = listPlayers;
    this.number = "4";
  });

  app.controller('TabController', function(){
    this.tab = 1;
    this.setTab = function(newValue){
      this.tab = newValue;
    };


  var listGames = [
    {
      name: 'Fifa17'
    },
    {
      name: 'Mario Kart'
    },
    {
      name: 'Mario PArty'
    }];

})();
