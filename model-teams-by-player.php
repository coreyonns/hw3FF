<?php
function selectTeamsByPlayer($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.team_id, team_name, team_division, avg_points, position_rank
FROM `team` t join ranking r on r.team_id= t.team_id where r.player_id=?");
       $stmt->bind_param("i", $iid);
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
