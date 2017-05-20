<?php

	function addParticipationTeam($idPlayer,$idParty,$idTeam)
  #Parameter : $idplayer $idparty
  #Result : (void) create a new participation for the player to the party
	{
	    require_once("pdo.php");
      $bd = connection();

	    $add = $bd->prepare( "INSERT INTO participateteam (idplayer,idparty,idteam) VALUES (?,?,?)");
	    $add->execute(array($idPlayer,$idParty,$idTeam));
	}

  function getPlayerParty($idParty)
  #Parameter : $idparty id of a party
  #Result : return the list of players participating to the party
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT pl1.idplayer, pl1.name, pl1.score, p1.scoreparty FROM participateteam as p1, player as pl1 WHERE idparty=$idParty AND p1.idplayer=pl1.idplayer");
    return $result;
  }

  function getPlayerTeam($idParty,$idTeam)
  #Parameter : $idparty id of a party, $idTeam
  #Result : return the list of players participating to the party in the team in parameter
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT idplayer FROM participateteam WHERE idparty=$idParty AND idteam=$idTeam");
    return $result;
  }

	function getRankPlayerTeam($idParty,$idTeam)
	#Parameter : $idparty id of a party, $idTeam
	#Result : return the list of players participating to the party in the team in parameter
	{
		require_once("pdo.php");
		$bd = connection();

		$result = $bd->query("SELECT idplayer FROM participateteam WHERE idparty=$idParty AND idteam=$idTeam ORDER BY -score");
		return $result;
	}

	function updateScorePartyTeam($idplayer,$idparty,$scoreToAdd)
	#Parameter: id of the player, the new points to add
	#result : void, add scoreToAdd to the current ScoreParty
	{
		require_once("pdo.php");
		$bd = connexion();

		$bd->exec("UPDATE participate SET scoreParty = scoreparty + $scoreToAdd WHERE idparty ='". $idparty ."' AND idplayer='".$idplayer."' ");
	}

?>
