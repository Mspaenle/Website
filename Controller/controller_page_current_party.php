<?php
	require_once("Model/player.php");
	require_once("Model/party.php");
	require_once("Model/participate.php");
	require_once("Model/participateteam.php");

	if(isset($_COOKIE['party'])){
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
				updateScoreParty($idplayer,$Party,$score);
			}
			$answer=getPlayer($Party);
		}

		require_once("View/current_party.php");
	}
	else{
		require_once("View/no_current_party.php");
	}

 ?>
