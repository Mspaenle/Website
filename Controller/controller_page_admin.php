<?php

  if(isset($_COOKIE['idadmin'])){
    require_once("admin-page");
  }
  else {
    require_once("../View/admin.php");
  }

 ?>
