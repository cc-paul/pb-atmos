<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

    $id = $_POST["id"];
    
    $query = "DELETE FROM b_subscribers WHERE id = ?";
    if ($stmt = mysqli_prepare($con, $query)) {
        mysqli_stmt_bind_param($stmt,"s",$id);
        mysqli_stmt_execute($stmt);
        echo "Subscriber has been deleted";
    } else {
        echo "Error deleting subscriber";
    }
    
    mysqli_close($con);
?>