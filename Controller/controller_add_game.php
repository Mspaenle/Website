<?php

  require_once("../Model/administrator.php");
  require_once("../Model/game.php");

  $idadmin = $_COOKIE['idadmin'];
  $game = $_POST['nameGame'];
  $desc = $_POST['descr'];
  $image = $_POST['urlImage'];

  if(!is_string($game)||!is_string($desc)||!filter_var($a, FILTER_VALIDATE_URL)){
    require_once("../Controller/controller_page_admin_add.php");
  }
  else {
    $mdp = sha1($_POST['mdpAdmin']);
    if($mdp ==getMdp($idadmin)){
      addGame($game,$desc,$image);
      require_once("../Controller/controller_admin_redirection.php");
    }
    else{
      require_once("../Controller/controller_page_admin.php");
    }
  }

 ?>
