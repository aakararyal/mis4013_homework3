<?php
function selectPlayersByTeam($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.players_id, player_name, seasons, nfl_team, division  FROM `players` p join football f on p.players_id = f.players_id where f.players_id = ?");
       $stmt->bind_param("i", $cid); 
      $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
