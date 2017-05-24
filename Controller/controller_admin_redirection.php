<?php

  if(isset($_COOKIE['idadmin'])){
    $redirection =1;
    require_once("../Controller/controller_page_admin_choice.php");
  }
  else{
    require_once("../Controller/controller_page_admin.php");
  }

 ?>
