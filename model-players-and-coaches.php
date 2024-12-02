<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coaches_id, coaches_name, office_location FROM `coaches`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectCoachesWithPlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT c.coaches_id, 
                c.coaches_name, 
                c.office_location, 
                f.nfl_team, 
                f.division
            FROM `coaches` c
            JOIN `football` f ON f.coaches_id = c.coaches_id
            WHERE f.players_id = ?
        ");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPlayersByCoach($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT 
                p.players_id, 
                p.player_name, 
                p.player_position 
            FROM `players` p
            JOIN `football` f ON f.players_id = p.players_id
            WHERE f.coaches_id = ?
        ");
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

function selectStadiums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT stadium_id, stadium_name, staidum_capacity FROM `stadiums`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertFootball($cid, $pid, $sid, $nfl, $sea, $div) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            INSERT INTO football (coaches_id, players_id, stadium_id, nfl_team, seasons, division) 
            VALUES (?, ?, ?, ?, ?, ?)
        ");
        $stmt->bind_param("iiisss", $cid, $pid, $sid, $nfl, $sea, $div);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateFootball($fid, $cid, $pid, $sid, $nfl, $sea, $div) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            UPDATE football
            SET coaches_id = ?, players_id = ?, stadium_id = ?, nfl_team = ?, seasons = ?, division = ?
            WHERE football_id = ?
        ");
        $stmt->bind_param("iiisssi", $cid, $pid, $sid, $nfl, $sea, $div, $fid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteFootball($fid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM football WHERE football_id = ?");
        $stmt->bind_param("i", $fid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
