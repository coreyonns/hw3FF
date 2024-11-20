<?php
function selectPPGandRanking() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.player_id, player_name, player_position, avg_points,position_rank
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
function insertPPGandRanking() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `ranking` ( `player_id`, `team_id`, `position_rank`, `avg_points`) VALUES ('11', '11', '11', '9th', '27')");
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

