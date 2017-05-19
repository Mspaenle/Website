<?php

	require_once("Model/party.php");
	require_once("Model/game.php");

	$Party = $_POST['pName'];
	$Game = $_POST['game'];
	echo $Game;
	$idGame = getIdGame($Game);
	echo ICI;
	echo $idGame;
	$nbPlayers=$_POST['nbPlayers'];
	$Team=$_POST['typeParty'];
	addParty($Party,$idGame,$Team,$nbPlayers);

	$idParty=getParty($Party);
	setcookie("type", $Team, time()+(3600*24),"/");

	require_once("View/DisplayForm.php");

?>
