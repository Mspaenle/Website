<?php
	echo LA;
	require_once("Model/player.php");
	echo ICI;
	require_once("Model/party.php");
	echo ENCORE;
	require_once("Model/participate.php");
	echo VOILA;
	require_once("Model/participateteam.php");

	$Party = $_COOKIE['party'];
	echo "party ";
	echo $Party;
	$Team = teamParty($Party);
	echo "team ";

	$nb = getNbPlayers($Party);

	if($Team){
		$i=0;
		while($i<$nb){
			$a="PlayerName_".$i;
			$name = $_POST[$a];
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
		$name = $_POST['PlayerName_'.$i];
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
