<?php
function selectPlayersByTeam($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.player_id, player_name, player_position FROM `player` p join ranking r on r.player_id= p.player_id
where r.player_id=?);
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
?>
