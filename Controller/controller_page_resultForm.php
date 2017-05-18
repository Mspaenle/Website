<?php

	require_once("Model/player.php");
	require_once("Model/party.php");
	require_once("Model/participate.php");
	require_once("Model/participateteam.php");

	$Party = $_COOKIE['party'];
	$Team = teamParty($Party);
	$nb = getNbPlayers($Party);

	if($Team){
		$i=0;
		while($i<$nb){
			$name = $_POST['PlayerName_'.$i.];
			$PT = $_POST['TeamNumber'];
			$exist = getPlayer($name);
			if($exist){
				addParticipationTeam($exist,$Party,$PT);
			}
			else{
				addPlayer($name);
				$exist = getPlayer($name);
				addParticipationTeam($exist,$Party,$PT);
			}
			$i++;
		}
		$ans=getPlayerTeam($Party);
	}
	else{
		$name = $_POST['PlayerName_'.$i.];
		$exist = getPlayer($name);
		while($i<$nb){
			if($exist){
				addParticipation($exist,$Party);
			}
			else{
				addPlayer($name);
				$exist = getPlayer($name);
				addParticipation($exist,$Party);
			}
			$i++;
		}
		$ans=getPlayer($Party);
	}

	$answer=getListPlayer($ans);

	require("View/ResultForm.php");

?>
