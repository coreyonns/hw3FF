<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'stokeyst_hw3FFuser', 'S;{la[i^x^)g', 'stokeyst_hw3FF');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
