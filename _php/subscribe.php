<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

    $command = $_POST["command"];
    
    switch ($command) {
        case "save" :
            
            $cityid = $_POST["cityid"];
            $name   = $_POST["name"];
            $mobile = $_POST["mobile"];
            
            $query = "INSERT INTO b_subscribers (cityID,fullName,mobileNumber,dateCreated) VALUES (?,?,?,?);";
            if ($stmt = mysqli_prepare($con, $query)) {
                mysqli_stmt_bind_param($stmt,"ssss",$cityid,$name,$mobile,$global_date);
                mysqli_stmt_execute($stmt);
                echo 1;
            } else {
                echo 0;
            }
            
        break;
    }
    
    mysqli_close($con);
?>