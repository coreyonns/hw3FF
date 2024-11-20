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
?>
