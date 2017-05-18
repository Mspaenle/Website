<?php

	function addPlayer($name)
	{
	    require_once("pdo.php");
      $bd = connection();


	    $ajout = $bd->prepare( "INSERT INTO player (idplayer,name,score) VALUES ('".$email."','".$name."','".$score."')");

	    $ajout->execute();
	}

  function rankingPlayer(){
    require_once("pdo.php");
       	$bd = connection();
        $result = $bd->query("SELECT * FROM player ORDER BY score");

        return $result;

  }

?>
