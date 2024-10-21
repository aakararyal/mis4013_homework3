<?php
function selectStadiums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT stadium_id, stadium_name, staidum_capacity FROM `stadiums`  ");
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
