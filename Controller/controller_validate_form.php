<?php
$nbPlayers = $_GET['nbPlayers'];

//récupération des autres champs et stockage des valeur dans un tableau
for($i=0; $i<$nbPlayers; $i++)
  { //$date_entree[$i] = $_GET['date_entree['.$i.']'];
    echo $date_entree[$i] = $_GET['date_entree'][$i];
    echo "<br/>";
    }

//traitement des données

echo'<pre>';
    print_r($_GET);
echo'<pre>';
?>
