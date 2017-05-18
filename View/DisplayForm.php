<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/css/heroic-features.css" />
  	<link rel="stylesheet" href="View/css/style.css">
  	<link rel="stylesheet" href="View/style.css">

    <title> Players </title>

    <script type="text/javascript">
                var i = 0;

                function addPlayer(j,bool)
                {
                    if(!bool){
                      if (i < j-1 )
                      {
                          var newRow = document.createElement('tr');
                          newRow.innerHTML = '<td> <input type="text" name="PlayerName_'+i+'" ></td>';
                          document.getElementById('players').appendChild(newRow);
                          i++;
                      }
                    }
                    else{
                      if (i < j-1 )
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
    COUCOU
  </body>
</html>
