<?php
function selectInfo() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_name,yards,touches,touchdowns
FROM `information`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertInfo($pName,$pYards,$pTouches,$pTouchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `information` `player_name`, `yards`, `touches`, `touchdowns` VALUES (?, ?, ?, ?))";
         $stmt->bind_param("ss", $pName,$pYards,$pTouches,$pTouchdowns);
       $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateInfo($pName,$pPosition,$pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `player` set `player_name`=?, `player_position`=? where player_id=?");
         $stmt->bind_param("ssi", $pName,$pPosition,$pid);
       $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteInfo($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from player where player_id=?");
         $stmt->bind_param("i", $pid);
       $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
