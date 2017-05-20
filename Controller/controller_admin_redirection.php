<?php

  if($isset($_COOKIE('idadmin'))){
    require_once("View/admin_choice.php");
  }
  else{
    require_once("admin.php");
  }

 ?>
