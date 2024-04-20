<?php
	if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

	$username = $_POST["username"];
    $password = $_POST["password"];

	$sql    = "SELECT id FROM b_adminreg WHERE username = '$username' AND `password` = MD5('$password') AND isActive = 1";
    $result = mysqli_query($con,$sql);

    $id = 0;
    while ($row  = mysqli_fetch_row($result)) {
        $id = $row[0];
    }
    
    if ($id != 0) {
        $_SESSION["id"] = $id;
        echo 1;
    } else {
        echo 0;
    }
    
    mysqli_free_result($result);
    mysqli_close($con); 
?>