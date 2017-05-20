<?php
	require_once("Model/player.php");
	require_once("Model/party.php");
	require_once("Model/participate.php");
	require_once("Model/participateteam.php");

	$Party = $_COOKIE['party'];
	$nb = getNbPlayers($Party);
	echo "party ";
	echo $Party;
	echo $nb;
	$Team = teamParty($Party);
	echo "team ";
	echo $Team;

	if($Team){ // If the new player is in a team
		$i=1;
		while($i<=$nb){	// *$nb
			$a="PlayerName_".$i;
			echo $a;
			$name = $_POST[$a]; // Name of the player
			echo $name;
			$t = "PlayerTeam_".$i;
			echo $t;
			$PT = $_POST[$t]; // Team player
			echo $PT;
			$exist = getIdPlayer($name); // get the id of the player
			if(!is_null($exist)){
				//addParticipationTeam($exist,$Party,$PT);
			}
			else{
				//addPlayer($name);
				$exist = getIdPlayer($name);
				//addParticipationTeam($exist,$Party,$PT);
			}
			$i++;
		}
		$answer=getPlayerParty($Party);
	}
	else{
		$i=1;
		while($i<=$nb){
			$a="PlayerName_".$i;
			echo $a;
			$name = $_POST[$a];
			echo $name;

			$exist = getIdPlayer($name);
			echo ICI;
			echo $exist;
			echo LA;
			if(!is_null($exist)){
				echo exist;
				addParticipation($exist,$Party);
			}
			else{
				echo "does not exist";
				addPlayer($name);
				$exist = getIdPlayer($name);
				addParticipation($exist,$Party);
			}
			$i++;
		}
		$answer=getPlayer($Party);
	}

	require("View/ResultForm.php");

?>
