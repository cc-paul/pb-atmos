<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

    $time = $_POST["time"];
    $id   = $_SESSION["id"];
    
    $find_query = mysqli_query($con,"SELECT * FROM b_schedule WHERE time = '$time' AND isActive = 1");
    if (mysqli_num_rows($find_query) == 0) {
        mysqli_next_result($con);
        
        $query = "INSERT INTO b_schedule (time,createdBy,dateCreated) VALUES (?,?,?)";
        if ($stmt = mysqli_prepare($con, $query)) {
            mysqli_stmt_bind_param($stmt,"sss",$time,$id,$global_date);
            mysqli_stmt_execute($stmt);
            echo "Schedule has been added";
        } else {
            echo "Error saving schedule";
        }

    } else {
        echo "Schedule already exist";
    }
    
    mysqli_close($con);
?>