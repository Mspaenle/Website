<?php

  $Party = $_COOKIE['party'];
  $nameParty = getNameParty($Party);
  $Team= teamParty($Party);
	$nb = getNbPlayers($Party);

// Last update of score party
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
	}

//score player update
  if($Team){
    $answer=getRankPlayerParty($Party);
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
    $answer=getPlayerParty($Party);
  }


  require_once("View/result_party.php");

?>
