<?php

	$nbPlayers=$_POST['nbPlayers'];

	if(empty($_POST["typePartySolo"])&&empty($_POST["typePartyTeam"])){
		header("Location: ../error.php?message=no_mode_selected");
	}
	else{
		if(empty($_POST["typePartySolo"])&&!empty($_POST["typePartyTeam"])){
			$Team=1;
			require_once("View/DisplayForm.php");
		}
		else{
			$Team=2;
			require_once("View/DisplayForm.php");
		}
	}

?>
