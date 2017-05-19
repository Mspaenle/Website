<?php

	function addParty($id,$name,$idgame,$Team,$nb)
  #Parameter : $name of the new party, idgame played during the party, $Team (bool 1:team 0:solo)
  #Result : (void) create a new party with the name in parameter
	{
	    require_once("pdo.php");
      $bd = connection();

	    $add = $bd->prepare( "INSERT INTO party VALUES ('".$id."''".$name."','".$idgame"','".$Team."','".$nb."')");

	    $add->execute();
	}

  function getParty($name)
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

  function teamParty($idparty)
  #parameter: idparty
  #result: boolean true if it's a team party
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT team FROM party WHERE idparty='".$idParty."'");
    $team=$result->fetch();
    $result->closeCursor();
    return $team;
  }

  function getNbPlayers($idParty)
  #Parameter: idparty
  #Result: the number of participants of the party
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT nbPlayer FROM party WHERE idparty='".$idParty."'");
    $nb=$result->fetch();
    $result->closeCursor();
    return $nb;
  }

?>
