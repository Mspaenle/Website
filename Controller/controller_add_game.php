<?php

  require_once("../Model/administrator.php");
  require_once("../Model/game.php");

  $idadmin = $_COOKIE['idadmin'];
  $game = $_POST['nameGame'];
  $desc = $_POST['descr'];
  $image = $_POST['urlImage'];

  $mdp = sha1($_POST['mdpAdmin']);
  if($mdp ==getMdp($idadmin)){
    addGame($game,$desc,$image);
    require_once("../Controller/controller_admin_redirection.php");
  }
  else{
    require_once("../Controller/controller_page_admin.php");
  } 

 ?>
