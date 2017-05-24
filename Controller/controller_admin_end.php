<?php

  $id=0;
  setcookie("idadmin", $id, time()-3600,"/");
  require_once("../Controller/controller_page_index.php");

 ?>
