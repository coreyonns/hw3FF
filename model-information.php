<?php
function selectInfo() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT information_id,player_name,yards,touches,touchdowns
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
function insertInfo($iYards,$iTouches,$iTouchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `information` ( `yards`, `touches`, `touchdowns`) VALUES (?,?,?,?);");
          $stmt->bind_param("iii",$iYards,$iTouches,$iTouchdowns);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateInfo($iYards,$iTouches,$iTouchdowns,$iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `information` set `yards`=?, `touches`=?, `touchdowns`=? where information_id=?");
          $stmt->bind_param("iiii",$iYards,$iTouches,$iTouchdowns,$iid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteInfo($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from information where information_id=?");
          $stmt->bind_param("i",$iid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
