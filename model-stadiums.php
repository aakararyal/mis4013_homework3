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

function insertStadiums($sName, $sCap) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `stadiums` ( `stadium_name`, `staidum_capacity`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sName, $sCap);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateStadiums($sName, $sCap, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `stadiums` set `stadium_name` = ?, `staidum_capacity` = ?  where stadium_id = ?");
        $stmt->bind_param("ss", $sName, $sCap, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteStadiums($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from stadiums where stadium_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
