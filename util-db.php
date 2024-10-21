<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'aryalouc_homework3user', 'R67Ga@Bg3C7P', 'aryalouc_homework3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
