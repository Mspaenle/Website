<?php

  if(isset($_COOKIE['idadmin'])){
    require_once("../Controller/controller_page_choice.php");
  }
  else {
    require_once("../View/admin.php");
  }

 ?>
