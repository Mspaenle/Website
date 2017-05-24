<?php

	require_once("../Model/game.php");
	require_once("../Model/player.php");

	$answer=getImages();

	$players=rankingPlayer();

	require_once("../View/index.php");

?>
