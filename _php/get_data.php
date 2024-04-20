<?php
	if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

	$cityId = $_POST["cityID"];

	$sql    = "SELECT DATE_FORMAT(dateCreated,'%h:%i:%s %p'),temp FROM b_temp_report WHERE cityId = '$cityId' AND DATE(dateCreated) = DATE(NOW()) ORDER BY dateCreated DESC LIMIT 10;";
    $result = mysqli_query($con,$sql);

    $json = array();
    while ($row  = mysqli_fetch_row($result)) {
        $json[] = array(
            'reading_time' => $row[0],
            'value1'       => $row[1]
        );
    }

    $query = "UPDATE b_temp_report SET isDisplayed = 1 WHERE isDisplayed = 0 AND cityId = ?";
    if ($stmt = mysqli_prepare($con, $query)) {
        mysqli_stmt_bind_param($stmt,"s",$cityId);
        mysqli_stmt_execute($stmt);
    }
    
    echo json_encode($json);
    mysqli_free_result($result);
    mysqli_close($con); 
?>