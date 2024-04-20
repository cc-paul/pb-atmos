<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

    $cityID = $_POST["cityID"];
    $link = $_POST["link"];
    
    $query = "INSERT INTO b_links (cityID,link) VALUES (?,?)";
    if ($stmt = mysqli_prepare($con, $query)) {
        mysqli_stmt_bind_param($stmt,"ss",$cityID,$link);
        mysqli_stmt_execute($stmt);
        echo "Link has been added";
    } else {
        echo "Error saving link";
    }
    
    mysqli_close($con);
?>