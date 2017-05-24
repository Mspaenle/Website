<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">

    <title> Players </title>

    <script type="text/javascript">
                var i = 1;

                function addPlayer(j,bool)
                {
                    if(!bool){
                      if (i <= j )
                      {
                          var newRow = document.createElement('tr');
                          newRow.innerHTML = '<td> <input type="text" name="PlayerName_'+i+'" ></td>';
                          document.getElementById('players').appendChild(newRow);
                          i++;
                      }
                    }
                    else{
                      if (i <= j )
                      {
                          var newRow = document.createElement('tr');
                          newRow.innerHTML = '<td> <input type="text" name="PlayerName_'+i+'" ></td><td> <input type="text" name="PlayerTeam_'+i+'"></td>';
                          document.getElementById('players').appendChild(newRow);
                          i++;
                      }
                    }
                }

                function removePlayer(element)
                {
                    document.getElementById('players').removeChild(element.parentNode);
                    i--;
                }
    </script>
  </head>

  <body>

    <?php include("nav.php"); ?>

    <div class="center-w">
      <div class="page-header">
        <h1 class ="display-3 text-center">Players</h1>
      </div>

      <div class="container">

        <form action="form-new-party/3" method="post">
          <table border="1" id="players" classe="tablePlayer col-ls-6 col-md-8 col-sm-12">
              <tr>
                  <th>Name</th>
                  <?php if($Team){?><th>Team Number</th><?php }?>
                  <th>
                    <?php $nbpl=0; ?>
                    <?php $i = $nbPlayers; ?>
                    <input type="button" id="add_players()" onClick="addPlayer(<?php echo $i;?>,<?php echo $Team;?>)" value="+" />
                  </th>
              </tr>
            </table>

          <input type="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>

    <?php include("foot.php");?>

  </body>
</html>
