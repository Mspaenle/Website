<?php
function connection()
  {
    try
    {
      $bd = new PDO('pgsql:host=ec2-54-228-189-223.eu-west-1.compute.amazonaws.com;port=5432;dbname=d9quk2i8qftthv;user=yucwnwjmchppyb;password=3a13007b84b9dde31bb958e914caee9770b50386b10b92b76659c6002215f46c');
    }
    catch (Exception $e)
    {
      die('<br> Echec lors de la connexion la BD :'.$e->getMessage());
    }
    return ($bd);
  }
?>
