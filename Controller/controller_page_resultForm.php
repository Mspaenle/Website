<?php
	$Party = $_COOKIE['party'];

	$Game = $_POST['game'];

	$nbPlayers=$_POST['nbPlayers'];

	$Team=$_POST['typeParty'];
	//require des models pour remplir les tables addPlayers
	require("View/ResultForm.php");

?>
