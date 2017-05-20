<?php

  function getMdp($idAdmin)
  #Parameter : $idadmin
  #return : the mdp of this admin
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT mdp FROM administrator WHERE idadmin=$idAdmin");
    $mdp=$result->fetch();
    return $mdp['mdp'];
  }

  function addMdp($idAdmin,$mdp)
  {
    require_once("pdo.php");
    $bd = connection();

    $bd->exec("UPDATE administrator SET mdp = '".$mdp."' WHERE idadmin ='". $idAdmin ."' ");
  }

 ?>
