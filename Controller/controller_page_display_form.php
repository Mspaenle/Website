<?php

	$Party = $_POST['pName'];
	setcookie("party", $Party, time()+(3600),"/");

	$Game = $_POST['game'];

	$nbPlayers=$_POST['nbPlayers'];

	$Team=$_POST['typeParty'];

	//Model : AddParty

	require_once("View/DisplayForm.php");

?>
