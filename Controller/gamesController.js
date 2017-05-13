(function() {
  var app = angular.module('Games', []);
  app.controller('GamesController', function(){
    this.gamesProposed = listGames;
  });

  app.controller('TabController', function(){
    this.tab = 1;
    this.setTab = function(newValue){
      this.tab = newValue;
    };

    this.isSet = function(tabName){
      return this.tab === tabName;
    };
  });

  var listGames = [
    {
      name: 'Fifa17',
      description: "FIFA, also known as FIFA Football or FIFA Soccer, is a series of association football video games or football simulator, released annually by Electronic Arts under the EA Sports label. While there was no major competition when EA released the first titles in their Madden NFL and NHL series, football video games such as Sensible Soccer, Kick Off and Match Day had been developed since the late 1980s and already competitive in the games market when EA Sports announced a football game as the next addition to their EA Sports label.",
      nbPlayer: 4,
      options: ["Individually", "by Team"],
      image: "/Website/images/Fifa17.jpeg"
    },
    {
      name: 'Mario Kart',
      description: "Mario Kart (マリオカート Mario Kāto?) is a series of go-kart-style racing video games developed and published by Nintendo as spin-offs from its trademark Super Mario series. The first in the series, Super Mario Kart, was launched in 1992 on the Super Nintendo Entertainment System to critical and commercial success.",
      nbPlayer: 4,
      options: ["Individually", "by Team"],
      image: "/Website/images/MarioKart.jpeg"
    },
    {
      name: 'Mario Kart',
      description: "Mario Kart (マリオカート Mario Kāto?) is a series of go-kart-style racing video games developed and published by Nintendo as spin-offs from its trademark Super Mario series. The first in the series, Super Mario Kart, was launched in 1992 on the Super Nintendo Entertainment System to critical and commercial success.",
      nbPlayer: 4,
      options: ["Individually", "by Team"],
      image: "/Website/images/MarioParty.jpeg"
    }];
})();
