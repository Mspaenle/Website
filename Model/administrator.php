<?php

  function getMdp($idAdmin)
  #Parameter : $idadmin
  #return : the mdp of this admin
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT mdp FROM administrator WHERE idadmin=$idAdmin");
    $mdp=$result->fetch();
    $result->closeCursor();
    return $mdp['mdp'];
  }

 ?>
