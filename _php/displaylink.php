<?php
    if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';
    include 'builder.php';
    
    $sql = "
        SELECT
            b.cityName,
            a.link,
            a.id
        FROM
            b_links a
        INNER JOIN
            b_cities b
        ON
            a.cityID = b.cityId
        ORDER BY
            a.cityID
    ";
    return builder($con,$sql);
?>