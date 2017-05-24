CREATE OR REPLACE FUNCTION delete_participate_score() RETURNS TRIGGER AS $delete_game_participate$
DECLARE
BEGIN
  UPDATE player
  SET score=score - (SELECT scoreparty
                      FROM participate
                      WHERE OLD.idplayer=participate.idplayer);
                      UPDATE player
  SET score=score - (SELECT scoreparty
                      FROM participateteam
                      WHERE OLD.idplayer=participateteam.idplayer);
  RETURN OLD;
END
$delete_game_participate$ LANGUAGE plpgsql;

CREATE TRIGGER check_delete_participate_score BEFORE DELETE ON participate
  FOR EACH ROW
EXECUTE PROCEDURE delete_participate_score();
