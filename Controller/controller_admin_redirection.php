<?php

  if(isset($_COOKIE['idadmin'])){
    $redirection =1;
    require_once("admin_choice.php");
  }
  else{
    require_once("admin.php");
  }

 ?>
