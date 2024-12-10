<?php
function selectPlayersByTeam($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.players_id, p.player_name, p.seasons, f.nfl_team, f.division  FROM `players` p join football f on p.players_id = f.players_id where f.players_id = ?");
       $stmt->bind_param("i", $cid); 
      $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        throw $e;
    }
}

?>
