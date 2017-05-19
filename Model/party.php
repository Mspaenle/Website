<?php

	function addParty($name,$idgame,$Team,$nb)
  #Parameter : $name of the new party, idgame played during the party, $Team (bool 1:team 0:solo)
  #Result : (void) create a new party with the name in parameter
	{
	    require_once("pdo.php");
      $bd = connection();

			$nameParty = pg_escape_string($name);
	    $add = $bd->prepare( "INSERT INTO party(nameparty,idgame,team,nbplayer) VALUES (?,?,?,?)");
	    $add->execute(array($name,$idgame,$Team,$nb));
	}

  function getParty($name)
  #Parameter : $name the name of the party
  #Result : return the idparty of the party with the name in parameter, if not exist return null
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT idparty FROM party WHERE nameparty=$name");
    return $result['idparty'];
  }

  function teamParty($idparty)
  #parameter: idparty
  #result: boolean true if it's a team party
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT team FROM party WHERE idparty=$idParty");
    return $result['team'];
  }

  function getNbPlayers($idParty)
  #Parameter: idparty
  #Result: the number of participants of the party
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT nbplayer FROM party WHERE idparty=$idParty");
    return $result['nbplayer'];
  }

?>
