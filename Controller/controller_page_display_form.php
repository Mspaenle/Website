<?php

	require_once("../Model/party.php");
	require_once("../Model/game.php");

	$nameParty = $_POST['pName'];
	$Game = $_POST['game'];
	$idGame = getIdGame($Game);
  $nbPlayers=$_POST['nbPlayers'];
  $Team=$_POST['typeParty'];
  addParty($nameParty,$idGame,$Team,$nbPlayers);
  $idParty=getParty($nameParty);

  setcookie("party", $idParty, time()+(3600*24),"/");

  require_once("../View/DisplayForm.php");

?>
