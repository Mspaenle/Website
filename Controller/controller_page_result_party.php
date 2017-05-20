<?php
  require_once("Model/player.php");
  require_once("Model/party.php");
  require_once("Model/participate.php");
  require_once("Model/participateteam.php");

  $Party = $_COOKIE['party'];
  $nameParty = getNameParty($Party);
  $Team= teamParty($Party);
	$nb = getNbPlayers($Party);
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

  setcookie("party", $idParty, time()-3600,"/");
  require_once("View/result_party.php");

?>
