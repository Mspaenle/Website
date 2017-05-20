<?php
  require_once("Model/player.php");
  require_once("Model/party.php");
  require_once("Model/participate.php");
  require_once("Model/participateteam.php");

  $Party = $_COOKIE['party'];
  $nameParty = getNameParty($Party);
  $Team= teamParty($Party);
	$nb = getNbPlayers($Party);

// Last update of score party
  if($Team){
		$ans=getPlayerParty($Party);
	}
	else{
		$ans=getPlayer($Party);
		while($donnees=$ans->fetch()){
			$idplayer = $donnees['idplayer'];
      echo $idplayer;
      echo " and ";
			$score=$_POST[$idplayer];
			echo $score;
			echo "FIN";
			updateScoreParty($idplayer,$Party,$score);
		}
	}

//score player update
  if($Team){
    $answer=getRankPlayerParty($Party);
  }
  else{
    $ans=getPlayer($Party);
    while($donnees=$ans->fetch()){
      $idplayer = $donnees['idplayer'];
      $score=$donnees['scoreparty'];
      updateScore($idplayer,$score);
    }
    $answer=getRankPlayer($Party);
  }

//DELETE COOKIES

  require_once("View/result_party.php");

?>
