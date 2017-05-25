<?php
	require_once("../Model/player.php");
	require_once("../Model/party.php");
	require_once("../Model/participate.php");
	require_once("../Model/participateteam.php");


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
			$score=$_POST[$idplayer];
			if(is_int($score)){
				updateScoreParty($idplayer,$Party,$score);
			}
		}
		$answer=getPlayer($Party);
	}

	require_once("../Controller/controller_page_result_party.php");

 ?>
