<?php

if(isset($_COOKIE['idadmin'])){
  require_once("../Controller/controller_page_admin_choice.php");
}
else{
  require_once("../Controller/controller_page_admin.php");
}

 ?>
