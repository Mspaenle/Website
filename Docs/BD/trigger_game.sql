CREATE OR REPLACE FUNCTION delete_game_participate() RETURNS TRIGGER AS $delete_game_participate$
DECLARE
BEGIN
  DELETE FROM participate
  WHERE participate.idparty IN (SELECT idparty
				FROM party
				WHERE party.idgame=OLD.idgame);
  DELETE FROM participateteam
  WHERE participateteam.idparty IN (SELECT idparty
      				FROM party
      				WHERE party.idgame=OLD.idgame);
  DELETE FROM party
  WHERE party.idgame=OLD.idgame;
  RETURN OLD;
END
$delete_game_participate$ LANGUAGE plpgsql;

CREATE TRIGGER check_delete_game_participate BEFORE DELETE ON game
  FOR EACH ROW
EXECUTE PROCEDURE delete_game_participate();
