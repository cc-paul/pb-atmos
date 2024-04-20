<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';
    include 'builder.php';
    
    $sql = "
        SELECT
            a.id,
            a.cityID,
            b.cityName,
            a.fullName,
            a.mobileNumber,
            DATE_FORMAT(a.dateCreated,'%m/%d/%Y') AS dateCreated
        FROM
            b_subscribers a
        INNER JOIN
            b_cities b
        ON
            a.cityID = b.cityId
    ";
    return builder($con,$sql);
?>