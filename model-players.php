<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT players_id, player_name, player_position FROM `players` ");
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
