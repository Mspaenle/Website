<?php

	require_once("Model/player.php");
	require_once("Model/party.php");
	require_once("Model/participate.php");
	require_once("Model/participateteam.php");

	$Party = $_COOKIE['party'];
	$Team = teamParty($Party);



	if($Team){
		//Game participants in teams

	}
	else{
		//Game participants in solo

	}
	require("View/ResultForm.php");

?>
