<?php
function selectPPGandRanking() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ranking_id, player_name, player_position, avg_points,position_rank
 FROM `player` p join ranking r on r.player_id=p.player_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertPPGandRanking($rank,$avg) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `ranking` ( `position_rank`, `avg_points`) VALUES (?,?)");
      $stmt->bind_param("ii", $rank,$avg);
     $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updatePPGandRanking($rank,$avg,$rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `ranking` set `position_rank`=?, `avg_points`=? where ranking_id=?");
      $stmt->bind_param("iii", $rank,$avg,$rid);
     $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deletePPGandRanking($rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from ranking where ranking_id=? ");
      $stmt->bind_param("i", $rid);
     $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

