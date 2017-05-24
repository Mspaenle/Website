<?php

  if(isset($_COOKIE['idadmin'])){
    require_once("page-admin");
  }
  else{
    require_once("../Controller/controller_page_admin.php");
  }

 ?>
