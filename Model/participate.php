<?php

	function addParticipation($idPlayer,$idParty)
  #Parameter : $idplayer $idparty
  #Result : (void) create a new participation for the player to the party
	{
	    require_once("pdo.php");
      $bd = connection();

	    $add = $bd->prepare( "INSERT INTO participate (idplayer,idparty) VALUES ('".$idplayer."','".$idParty."')");

	    $add->execute();
	}

  function getPlayer($idParty)
  #Parameter : $idparty id of a party
  #Result : return the list of players participating to the party
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT idplayer FROM participate WHERE idparty='".$idParty."'");
    return $result;
  }


?>
