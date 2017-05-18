<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">
    <title> Current Party </title>
  </head>

  <body>

    <?php include("nav.php"); ?>
<div class="center-w">
    <div class="page-header">
      <h1 class ="display-3 text-center">Current Party</h1>
      <h2 class="display-2 text-center"><?php echo $Party;?></h2>
    </div>

    <form action = "current_party.php" method="post">
      <table class="table table-hover rankTab">
      	<thead>
      		<tr>
      			<th> Number </th>
      			<th> Name </th>
      			<th> Current score </th>
      			<th> New points </th>
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
        </tbody>
      </table>
      <input type="submit" value="Update" class="btn btn-default">
    </form>



    <div class="container">
      <?php include("foot.php");?>
    </div>
</div>
  </body>

</html>
