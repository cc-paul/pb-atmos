<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';
    include 'builder.php';
    
    $sql = "
        SELECT
            TIME_FORMAT(a.time, '%r') AS time,
            CONCAT(b.fName,' ',b.lName) AS fullName,
            DATE_FORMAT(a.dateCreated,'%m/%d/%Y') AS dateCreated,
            a.id
        FROM
            b_schedule a
        INNER JOIN
            b_adminreg b
        ON
            a.createdBy = b.id
        WHERE
            a.isActive =1
        ORDER BY
            a.dateCreated DESC
    ";
    return builder($con,$sql);
?>