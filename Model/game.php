<?php

  function addGame($name,$descr,$image)
  #Parameter : $name of the new game, $descr, $image (url)
  #Result : (void) create a new game with the name in parameter
  {
      require_once("pdo.php");
      $bd = connection();

      $add = $bd->prepare( "INSERT INTO team (namegame,description,image) VALUES ('".$name."','".$descr."','".$image."')");

      $add->execute();
  }

  function getImages()
  #Result : return the url of the games images
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT image FROM game ");
    return $result;
  }

  function getGames()
  #result: return the list of all the games
  {
    require_once("pdo.php");
    $bd = connection();

    $result = $bd->query("SELECT * FROM game ");
    return $result;
  }

 ?>
