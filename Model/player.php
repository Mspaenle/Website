<?php

	function addPlayer($name)
  #Parameter : $name of the new player
  #Result : (void) create a new player with the name in parameter
	{
	    require_once("pdo.php");
      $bd = connection();

	    $add = $bd->prepare( "INSERT INTO player (name) VALUES (?)");
	    $add->execute(array($name));
	}

  function getIdPlayer($name)
  #Parameter : $name the name of the player
  #Result : return the idPlayer of the player with the name in parameter, if not exist return null
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT idplayer FROM player WHERE name='".$name."'");
		$ans=$result->fetch();
    return $ans['idplayer'];
  }

  function rankingPlayer()
  #Result : the list of players ordered by score
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT * FROM player ORDER BY -score");
    return $result;
  }

  function updateScore($idPlayer,$scoreToAdd)
  #Parameter : id of the player
  #Result : (void) add $scoreToAdd to the current score of the player
  {
    require_once("pdo.php");
    $bd = connection();

		$bd->exec("UPDATE player SET score = score + $scoreToAdd WHERE idplayer='".$idPlayer."'");
  }

?>
