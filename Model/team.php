<?php

	function addTeam($name)
  #Parameter : $name of the new team
  #Result : (void) create a new team with the name in parameter
	{
	    require_once("pdo.php");
      $bd = connection();

	    $add = $bd->prepare( "INSERT INTO team (name) VALUES ('".$name."')");

	    $add->execute();
	}

  function getTeam($name)
  #Parameter : $name the name of the team
  #Result : return the idteam of the team with the name in parameter, if not exist return null
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT idteam FROM team WHERE name='".$name."'");
    $team=$result->fetch();
    $result->closeCursor();
    return $team;
  }

?>
