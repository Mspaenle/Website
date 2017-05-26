<?php

  function addGame($name,$descr,$image)
  #Parameter : $name of the new game, $descr, $image (url)
  #Result : (void) create a new game with the name in parameter
  {
      require_once("pdo.php");
      $bd = connection();

      $add = $bd->prepare( "INSERT INTO game (namegame,description,image) VALUES (?,?,?)");
      $add->execute(array($name,$descr,$image));
  }

  function getImages()
  #Result : return the url of the games images
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT image FROM game");
    return $result;
  }

  function getIdGame($name)
  #Parameter : the name of a Game
  {
      require_once("pdo.php");
      $bd = connection();

      $result = $bd->query("SELECT idgame FROM game WHERE namegame='".$name."'");
      $ans=$result->fetch();
      return $ans['idgame'];
  }

  function getGameById($id)
  # Parameter : id of the game
  # Return the game with the id in parameter
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT * FROM game WHERE idgame='".$id."'");
    $ans=$result->fetch();
    return $ans;
  }

  function getGames()
  #result: return the list of all the games
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT * FROM game ");
    return $result;
  }

  function rmGame($idgame)
  #Parameter : id of the game to remove
  {
    require_once("pdo.php");
    $bd = connection();

    $bd->exec("DELETE FROM game WHERE idgame ='". $idgame ."'");
  }

 ?>
