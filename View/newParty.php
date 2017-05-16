<!DOCTYPE html>
<html ng-app='Games'>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="View/bootstrap-3.3.7-dist/css/heroic-features.css" />
    <script type="text/javascript" src="View/angular.min.js"></script>
    <script src="Controller/gamesController.js"></script>
    <title> Start a new tournament </title>
  </head>

  <body>
    <?php include("nav.php"); ?>
    <div class="page-header">
      <h1 class ="display-3 text-center">{{ "Start a new party"}}</h1>
    </div>

    <div class ="container">
      <form>
        <div class ="form-group row">
          <label for="partyName" class="col-sm-2 col-form-label">Party :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pName" placeholder="Amy's Bday">
          </div>
        </div>

        <div class ="form-group row">
          <label for="game"  class="col-sm-2 col-form-label">Which game do you want to play ?</label>
          <div class="col-sm-10">
            <select id="game" class="form-control">
              <option value="fifa17">Fifa 17</option>
              <option value="marioParty">Mario Party</option>
              <option value="marioKart">Mario Kart</option>
            </select>
          </div>
        </div>


          <div class ="form-group row">
            <label for="numberPlayers" class="col-sm-2 col-form-label">Number of players :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nbPlayers" placeholder="From 2 to 16">
            </div>
          </div>
<br>
        <fieldset class="form-group row">
          <label class="col-sm-2 col-form-label">Type of party</label>
          <div class ="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="typeParty" id="solo" value="solo">
              Individual
            </label>
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="typeParty" id="team" value="team">
              By Team
            </label>
          </div>
        </fieldset>

      </form>
      <?php include("foot.php"); ?>
    </div>
  </body>
</html>
