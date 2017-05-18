<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Party Engaged </title>
  </head>

  <body>

    <?php include("nav.php"); ?>
<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Party <?php echo $Party;?></h1>
    </div>
<form cible="current_party.php">
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th > Number </th>
    			<th> Name </th>
    			<th> Current score </th>
    			<th> New score </th>
    		</tr>
    	</thead>

    	<tbody>
    		<?php


    		while($donnees = $answer->fetch())
    		{
    		?>
    		<tr>
    			 <td> <?php echo $donnees['number']; ?></td>
    			<td> <?php echo $donnees['name']; ?></td>
    			<td> <?php echo $donnees['scoreP']; ?></td>
          <?php $i=$donnees['number']; ?>
    			<td> <input type="text" name="score<?php $donnees['number']; ?>" value =<?php $donnees['number']; ?>> </td>
    		</tr>
    		<?php
    		}
    		$answer->closeCursor();
    		?>

    </table>

    <input type="submit" value="Update" class="btn btn-default">
</form>

 <a href="stats.php" class="btn btn-default">Finish</a>


    <div lass="container">
      <?php include("foot.php"); ?>
    </div>
</div>

  </body>

</html>
