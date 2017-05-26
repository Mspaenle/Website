<?php

  require_once('../Model/game.php');

  if(isset($_GET['idGame']))
  {
      $idgame = $_GET['idGame'];
      $game=getGameById($idgame);
      require_once("../View/display_game.php");
  }
  require_once("../Controller/controller_page_games.php");

?>
