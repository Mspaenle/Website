<?php
	require_once("../Model/player.php");
	require_once("../Model/party.php");
	require_once("../Model/participate.php");
	require_once("../Model/participateteam.php");

	$Party = $_COOKIE['party'];
	$nb = getNbPlayers($Party);
	$Team = teamParty($Party);
	$nameParty = getNameParty($Party);

	if($Team){ // If the new player is in a team
		$i=1;
		while($i<=$nb){	// *$nb
			$a="PlayerName_".$i;
			$name = $_POST[$a]; // Name of the player
			$t = "PlayerTeam_".$i;
			$PT = $_POST[$t]; // Team player
			$exist = getIdPlayer($name); // get the id of the player
			if(!is_null($exist)){
				addParticipationTeam($exist,$Party,$PT);
			}
			else{
				addPlayer($name);
				$exist = getIdPlayer($name);
				addParticipationTeam($exist,$Party,$PT);
			}
			$i++;
		}
		$answer=getPlayerParty($Party);
	}
	else{
		$i=1;
		while($i<=$nb){
			$a="PlayerName_".$i;
			$name = $_POST[$a];
			$exist = getIdPlayer($name);
			if(!is_null($exist)){
				addParticipation($exist,$Party);
			}
			else{
				addPlayer($name);
				$exist = getIdPlayer($name);
				addParticipation($exist,$Party);
			}
			$i++;
		}
		$answer=getPlayer($Party);
	}

	require("../View/ResultForm.php");

?>
