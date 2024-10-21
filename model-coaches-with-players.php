<?php
function selectCoachesWithPlayers($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.coaches_id, coaches_name, office_location, nfl_team, division  FROM `coaches` c join football f on f.coaches_id = c.coaches_id where f.players_id =?");
       $stmt->bind_param("i", $iid); 
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
