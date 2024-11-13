<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, team_division
FROM `team` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertTeams($tName,$tDiv) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `team` ( `team_name`, `team_division`) VALUES (?, ?)");
         $stmt->bind_param("ss", $tName,$tDiv);
      $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeams($tName,$tDiv,$tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `team` set 'team_name` = ? , `team_division` = ? where team_id=?");
         $stmt->bind_param("ssi", $tName,$tDiv,$tid);
      $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteTeams($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE from team where team_id=?");
         $stmt->bind_param("i", $tid);
      $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

