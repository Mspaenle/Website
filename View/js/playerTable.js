<script type="text/javascript">



            function addKid()
            {

                    var newRow = document.createElement('tr');

                    newRow.innerHTML = '<td> <input type="text" name="PlayerName_'+i+'" ><td> <input type="text" name="PlayerNumber_'+i+'" ></td>';

                    document.getElementById('players').appendChild(newRow);

            }

            function removeKid(element)
            {
                document.getElementById('players').removeChild(element.parentNode);
                i--;
            }

  </script>
