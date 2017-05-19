<?php

	require_once("Model/party");

	$Party = $_POST['pName'];
	$Game = $_POST['game'];
	$nbPlayers=$_POST['nbPlayers'];
	$Team=$_POST['typeParty'];
	$id=4;
	addParty($id,$Party,$Game,$Team,$nbPlayers);

	$idParty=getParty($Party);
	setcookie("type", $Team, time()+(3600*24),"/");

	require_once("View/DisplayForm.php");

?>
