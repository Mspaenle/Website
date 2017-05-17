<script type="text/javascript">

            var i = 0;

            function addKid(j)
            {
                if (i < j-1)
                {
                    var newRow = document.createElement('tr');

                    newRow.innerHTML = '<td> <input type="text" name="PlayerName_'+i+'" ><td> <input type="text" name="PlayerNumber_'+i+'" ></td>';

                    document.getElementById('players').appendChild(newRow);
                    i++;
                }
            }

            function removeKid(element)
            {
                document.getElementById('players').removeChild(element.parentNode);
                i--;
            }

  </script>
