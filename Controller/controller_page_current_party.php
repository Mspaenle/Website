<?php
	require_once("Model/player.php");
	require_once("Model/party.php");
	require_once("Model/participate.php");
	require_once("Model/participateteam.php");


	$Party = $_COOKIE['party'];
	$nameParty = getNameParty($Party);
	$Team= teamParty($Party);
	$nb = getNbPlayers($Party);

	if($Team){
		$answer=getPlayerParty($Party);
	}
	else{
		$ans=getPlayer($Party);
		while($donnees=$ans->fetch()){
			$idplayer = $donnees['idplayer'];
			echo $idplayer;
			echo "AND";
			$score=$_POST[$idplayer];
			echo $score;
			echo "FIN";
			updateScoreParty($idplayer,$Party,$score);
		}
		$answer=getPlayer($Party);
	}



	require_once("View/current_party.php");

 ?>
