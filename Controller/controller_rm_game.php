<?php

  require_once("../Model/administrator.php");
  require_once("../Model/game.php");

  $idadmin = $_COOKIE['idadmin'];
  $game = $_POST['game'];
  $idgame = getIdGame($game);

  $mdp = sha1($_POST['mdpAdmin']);
  if($mdp ==getMdp($idadmin)){
    rmGame($idgame);
    require_once("../Controller/controller_admin_redirection.php");
  }
  else{
    require_once("../Controller/controller_page_admin.php");
  }

 ?>
