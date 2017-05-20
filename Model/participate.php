<?php

	function addParticipation($idPlayer,$idParty)
  #Parameter : $idplayer $idparty
  #Result : (void) create a new participation for the player to the party
	{
	    require_once("pdo.php");
      $bd = connection();

	    $add = $bd->prepare( "INSERT INTO participate (idplayer,idparty) VALUES (?,?)");
	    $add->execute(array($idPlayer,$idParty));
	}

  function getPlayer($idParty)
  #Parameter : $idparty id of a party
  #Result : return the list of players participating to the party
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT pl1.idplayer, pl1.name, pl1.score, p1.scoreparty FROM participate as p1, player as pl1 WHERE idparty=$idParty AND p1.idplayer=pl1.idplayer");
    return $result;
  }

	function getRankPlayer($idParty)
	#Parameter : $idparty id of a party
	#Result : return the list of players participating to the party
	{
		require_once("pdo.php");
		$bd = connection();

		$result = $bd->query("SELECT pl1.idplayer, pl1.name, pl1.score, p1.scoreparty FROM participate as p1, player as pl1 WHERE idparty=$idParty AND p1.idplayer=pl1.idplayer ORDER BY -scoreParty");
		return $result;
	}

	function updateScoreParty($idplayer,$idparty,$scoreToAdd)
	#Parameter: id of the player, the new points to add
	#result : void, add scoreToAdd to the current ScoreParty
	{
		require_once("pdo.php");
  	$bd = connection();

		$bd->exec("UPDATE participate SET scoreParty = scoreparty + $scoreToAdd WHERE idparty ='". $idparty ."' AND idplayer='".$idplayer."' ");
	}

?>
