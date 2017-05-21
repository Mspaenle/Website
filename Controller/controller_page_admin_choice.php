<?php

    require_once("Model/administrator.php");
    if(!isset($_COOKIE['idadmin'])){
      $id = $_POST['idAdmin'];

      $mdp = sha1($_POST['mdpAdmin']);
      if($mdp ==getMdp($id)){
        setcookie("idadmin", $id, time()+3600,"/");
        require_once("View/admin_choice.php");
      }
      else{
        require_once("View/admin.php");
      }
    }
    else{
        require_once("View/admin_choice.php");
    }

 ?>
