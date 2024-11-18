<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coaches_id, coaches_name, office_location FROM `coaches` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCoaches($coName, $coLocation) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO coaches (`coaches_name`, `office_location`) VALUES (?, ?)");
        //INSERT INTO coaches (`coaches_name`, `office_location`) VALUES (?, ?);
        $stmt->bind_param("ss", $coName, $coLocation);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateCoaches($coName, $coLocation, $coid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `coaches` SET `coaches_name` = ?, `office_location` = ? WHERE `coaches_id` = ?;");



        
        $stmt->bind_param("ssi", $coName, $coLocation, $coid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCoaches($coid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from coaches where coaches_id =? ");
        $stmt->bind_param("i", $coid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
