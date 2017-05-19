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

  function getPlayer($name)
  #Parameter : $name the name of the player
  #Result : return the idPlayer of the player with the name in parameter, if not exist return null
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT idPlayer FROM player WHERE name=$name");
    $player=$result->fetch();
    $result->closeCursor();
    return $player['idPlayer'];
  }

  function getListPlayer($id)
  #Parameter: list of id
  #result: list of players
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT * FROM player WHERE idplayer in $id");
    return $result;
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

		$bd->execute("UPDATE player SET score = score +$scoreToAdd WHERE email =$iD");
    $update->execute();
  }

?>
