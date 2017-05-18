<?php

	function addParty($name,$idgame)
  #Parameter : $name of the new party, idgame played during the party
  #Result : (void) create a new party with the name in parameter
	{
	    require_once("pdo.php");
      $bd = connection();

	    $add = $bd->prepare( "INSERT INTO party (nameparty,idgame) VALUES ('".$name."','".$idgame"')");

	    $add->execute();
	}

  function getparty($name)
  #Parameter : $name the name of the party
  #Result : return the idparty of the party with the name in parameter, if not exist return null
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT idparty FROM party WHERE nameparty='".$name."'");
    $party=$result->fetch();
    $result->closeCursor();
    return $party;
  }


?>
