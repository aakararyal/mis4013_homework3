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
function insertPlayer($cName, $cPosition) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `players` ( `player_name`, `player_position`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cName, $cPosition);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCourse($cName, $cPosition, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `players` set `player_name` = ?, `player_position` = ? where players_id = ?");
        $stmt->bind_param("ssi", $cName, $cPosition, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from players where players_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
