<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

    $row_id   = $_POST["row_id"];
    
    $query = "UPDATE b_schedule SET isActive = 0 WHERE id =?";
    if ($stmt = mysqli_prepare($con, $query)) {
        mysqli_stmt_bind_param($stmt,"s",$row_id);
        mysqli_stmt_execute($stmt);
        echo "Schedule has been deleted";
    } else {
        echo "Error deleting schedule";
    }
    
    mysqli_close($con);
?>